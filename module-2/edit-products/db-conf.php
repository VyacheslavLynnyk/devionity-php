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
    return mysqli_insert_id($link);
}

function getUserById($link, $user_id)
{
    $sql = "SELECT user, role FROM users WHERE id='$user_id'";
    $res = mysqli_query($link, $sql);
    return mysqli_fetch_assoc($res);
}

function getItems($link)
{

    $sql = 'SELECT * FROM products';
    if (isset($_SESSION['role']) && ($_SESSION['role'] != 'admin') ) {
        $sql .= ' WHERE is_active=1';
    }
    $res = mysqli_query($link, $sql);
    $items = [];
    while ($row = mysqli_fetch_assoc($res)) {
        $items[] = $row;
    }
    return $items;
}

function updateProducts($link)
{
    if (isset($_POST['action']) && $_SESSION['role'] != 'guest') {
        $name = mysqli_real_escape_string($link, $_POST['name']);
        $desc = mysqli_real_escape_string($link, $_POST['description']);
        $price = mysqli_real_escape_string($link, $_POST['price']);
        $image = mysqli_real_escape_string($link, $_POST['image']);
        $is_active = mysqli_real_escape_string($link, $_POST['is_active']);
        $vendor = mysqli_real_escape_string($link, $_POST['vendor']);
        $edit_date = date('Y-m-d H:i:s');
        $id = (isset($_POST['id'])) ? mysqli_real_escape_string($link, $_POST['id']) : null;

        if ( $is_active != null && $name != null) {
            $data = "`name`='$name',
            description='$desc',
            price='$price',
            image='$image',
            is_active='$is_active',
            vendor='$vendor',
            edit_date='$edit_date'";
            if (checkId($link, $id) && $_SESSION['role'] == 'admin') {
                $sql = "UPDATE products SET ".$data." WHERE id=$id";
            } elseif ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'user') {
                $id = (isset($id)) ? "id=$id, " : '';
                $sql = "INSERT INTO products SET $id".$data;
            }
//          var_dump($sql);
            mysqli_query($link, $sql);
        }
    }
}

function checkId($link, $id)
{
    if (isset($id)) {
        $sql = "SELECT id FROM products WHERE id='$id'";
        $res = mysqli_query($link, $sql);
        return (bool)mysqli_fetch_row($res);
    }
    return false;
}
