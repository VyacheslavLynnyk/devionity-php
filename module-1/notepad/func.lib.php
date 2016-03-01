<?php

define('BASE_URL', '.');
define ('CONTAINER', __DIR__.'/container');


function getPathArr($path)
{   if (strpos($path, '/..')) {
        return [];
    }
    $pathArr = explode('/', $path);
    if (is_file(CONTAINER . $path) || !is_dir((CONTAINER . $path))) {
        array_pop($pathArr);
    }
    return ($pathArr) ? $pathArr : [];
}

function getPartPath($pathArr, $level )
{
    if (sizeof($pathArr) <= $level ) {
        return false;
    }
    $path = '';
    $level++;
    for ($num = 0; $num < $level ; $num++ ) {
        $path = $path . $pathArr[$num] . '/';
    }
    return $path;
}

function getFilesArr($pathArr) {
    $scanPath = '';

    if (!isset($pathArr[0])) {
        $pathArr[0] = '';
    }
    foreach ($pathArr as $num => $value) {

        $scanPath = $scanPath . $value . '/' ;
        $filesArr[$num] = scandir(CONTAINER . $scanPath);
        // remove '.' and '..'
        array_shift($filesArr[$num]);
        array_shift($filesArr[$num]);
    }
    return $filesArr;
}

function saveFile()
{
    if (isset($_POST['edit'])) {
        if (is_dir(CONTAINER . $_POST['filename'])) {
            $linkArr = explode('/', $_POST['filename']);
            array_pop($linkArr);
            $link = implode('/', $linkArr) . '/';
            rename(CONTAINER . $_POST['filename'], CONTAINER . $link . $_POST['content']);
            $_POST['filename'] = $link . $_POST['content'];
        } elseif (is_file(CONTAINER . $_POST['filename'])) {
            file_put_contents(CONTAINER . $_POST['filename'], $_POST['content']);
        }
    }
}

function renameIt($path)
{
    if (isset($_POST['rename'])) {
        if (is_dir($_POST['filename'])) {
            rename($_POST['filename'], $path. '/' .$_POST['content']);
        } elseif (is_file($_POST['filename'])){
            rename($_POST['filename'], $_POST['content']);
        }
    }
}

function showFilesPath($filesArr, $pathArr, $level = 0)
{
    ?> <ul> <?php
    if ($level >= (sizeof($pathArr))) {
        ?> </ul> <?php
        return;
    }
    $link = getPartPath($pathArr, $level);
    foreach ($filesArr[$level] as $key => $file) {
        if (is_dir(CONTAINER . $link . $file)) {
            ?> <li class="folder"><a href="?filename=<?= $link . $file ?>"><?= $file ?></a></li> <?php
        } else {
            ?> <li class="file"><a href="?filename=<?= $link . $file ?>"><?= $file ?></a></li> <?php
        }
        if (isset($pathArr[$level+1]) && $file == $pathArr[$level+1]) {
            ?> <li><?php showFilesPath($filesArr, $pathArr, ++$level) ?></li> <?php
        }
    }
    ?> </ul> <?php
}

/*
function scanFolder($path, $link)
{
    $dir = scandir($path.'/');
    ?> <ul> <?php
    foreach ($dir as $filename) {
        if ($filename != '.' && $filename != '..') {
            if (is_dir($path.'/'.$filename)){ ?>

                <div class="folder">
                    <a href="?filename=<?= $link . '/' . $filename ?>">[<?= $filename ?>]</a>
                    <span class="rename"><a href="?filename=<?= $link.'/' . $filename ?>">rename</a></span>

                </div> <?php
                if (isset($_GET['filename'])) {
                    if (is_dir($_GET['filename']) && $_GET['filename'] != $link ) {
                        scanFolder($_GET['filename'], $_GET['filename']);
                    }
                }
            } elseif (is_file($path.'/'.$filename)) { ?>

                <div class="file">
                    <a href="?filename=<?= $link.'/' . $filename ?>"><?= $filename ?></a>
                    <span class="rename"><a href="?filename=<?= $link.'/' . $filename ?>">rename</a></span>
                </div> <?php
            }
        }
    }
    ?> </ul> <?php
}
*/


// ----
saveFile();

if ( !isset($_GET['filename']) ||
     !is_dir(CONTAINER . $_GET['filename']) && !is_file(CONTAINER . $_GET['filename']) ) {

        $_GET['filename'] = (isset($_POST['filename'])) ? $_POST['filename'] : null;
}
$path = $_GET['filename'];



?>
