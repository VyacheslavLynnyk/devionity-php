<?php

//$index = explode('/',$_SERVER['PHP_SELF']);
//array_pop($index);
define('BASE_URL', '.');
//    . implode('/', $index));

function editFile($path)
{
    if (isset($_POST['edit'])) {
        if (is_dir($_POST['filename'])) {
//            rename($_POST['filename'], $path. '/' .$_POST['content']);
            echo "dir $path";
        } elseif (is_file($_POST['filename'])) {
            file_put_contents($_POST['filename'], $_POST['content']);
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

// ----

    $path = __DIR__ . '/container';
    $link = BASE_URL . '/container';

    editFile($path);


    ?>
