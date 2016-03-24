<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'php_class01');

function connect()
{
    return mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}

function createUser($link, $login, $pass)
{
    $sql = "INSERT INTO users SET user='$login', pass='$pass'";
    mysqli_query($link, $sql);
}