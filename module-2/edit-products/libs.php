<?php

function filter($data, $type = 's') {
    switch ($type) {
        case 's' : $data = strip_tags(trim($data));
            break;
        case 'i': $data = (int) $data;
        case 'f': $data = (float) $data;
    }
}

function isAuthorized() {
    if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'ok') {
        return true;
    }
    return false;
}

function login($link, $user_id) {
    $_SESSION['auth'] = 'ok';
    $_SESSION['user_id'] = $user_id;

    $user_info = getUserById($link, $user_id);
    $_SESSION['user'] = $user_info['user'];
    $_SESSION['role'] = $user_info['role'];

    header('LOCATION: ./index.php');
}

function canEdit()
{
    if ( isset($_SESSION['role']) && ($_SESSION['role'] == 'admin') ) {
        return '';
    }
    return 'disabled';
}

function canAdd()
{
    if ( isset($_SESSION['role']) && ($_SESSION['role'] == 'admin' || $_SESSION['role'] == 'user') ) {
        return '';
    }
    return 'input--hidden';
}

function getName()
{
    return $_SESSION['user'];
}