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

function login() {
    $_SESSION['auth'] = 'ok';
    header('LOCATION: ./index.php');
}
