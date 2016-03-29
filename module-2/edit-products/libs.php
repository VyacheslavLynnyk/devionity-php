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
    return 'is--hidden';
}

function getName()
{
    return $_SESSION['user'];
}

function classAdd($className)
{
    if ($className != null) {
        return ' class="' . $className . '"';
    }
    return '';
}

function getPriceRange($link)
{
    $sql = 'SELECT MIN(price) as min, MAX(price) as max FROM products';
    $res = mysqli_query($link, $sql);
    $vals = mysqli_fetch_assoc($res);
    $step = floor(($vals['max'] - $vals['min']) / 5);
    $out =  '<select name="price_range">'
            .   "<option value=\"\">All</option>";
        for ($i = 0 ; $i < 6; ) {
            $price[$i] = $vals['min'] + $step * $i;
            $price[++$i] = $vals['min'] + $step * $i;
            if ($price[$i] > $vals['max']) {
                $price[$i] = "more";
            }
            if (isset($_GET['price_range']) &&
                $_GET['price_range'] == "${price[$i-1]}-${price[$i]}") {
                $selected = 'selected';
            } else {
                $selected = '';
            }
            $out .= "<option $selected value=\"${price[$i-1]}-${price[$i]}\">${price[$i-1]} - ${price[$i]}</option>";
        }
    $out .= '</select>';
    return $out;
}


function getVendors($link)
{
    $sql = 'SELECT vendor FROM products GROUP BY vendor';
    $res = mysqli_query($link, $sql);
    $vendors = mysqli_fetch_all($res);

    $out = '<select name="vendor">'
        .     "<option value=\"\">All</option>";
        foreach ($vendors as $vendor) {

            if (isset($_GET['vendor']) &&
                $_GET['vendor'] == $vendor[0]) {
                $selected = 'selected';
            } else {
                $selected = '';
            }
            $out .= "<option $selected value=\"${vendor[0]}\">${vendor[0]}</option>";
        }
    $out .= '</select>';
    return $out;
}

function getPriceOrder()
{
    if (isset($_GET['price_order']) && isset($_GET['price_order'])) {
        $price_order = strip_tags($_GET['price_order']);
        return $price_order;
    }
    return null;
}
function filterVendors()
{
    if (isset($_GET['filter']) && isset($_GET['vendor'])) {
        $vendor = strip_tags($_GET['vendor']);
        return $vendor;
    }
}

function filterPrice()
{
    if (isset($_GET['filter']) && isset($_GET['price_range']) && $_GET['price_range'] != '') {
        $prices = explode('-', $_GET['price_range']);
        $prices[0] = round($prices[0]);
        if ($prices[1] == 'more') {
            $prices[1] = 0;
        }
        return $prices;
    }
}