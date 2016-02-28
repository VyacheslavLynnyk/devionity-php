

<?php

$index = explode('/',$_SERVER['PHP_SELF']);
array_pop($index);
define('BASE_URL',implode('/', $index));

function editFile($path)
{
    if (isset($_POST['edit'])) {
        if (is_dir($_POST['filename'])) {
//            rename($_POST['filename'], $path. '/' .$_POST['content']);
        } elseif (is_file($_POST['filename'])){
            file_put_contents($_POST['filename'], $_POST['content']);
        }
    }
}

function rename($path)
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
        if ($filename != '.' & $filename != '..') {
            if (is_dir($path.'/'.$filename)){?>
                <li><a href="?filename=<?= $link . '/' . $filename ?>">[<?= $filename ?>]</a></li>
                <?php
            } elseif (is_file($path.'/'.$filename)) { ?>
                <li><a href="?filename=<?= $link.'/' . $filename ?>"><?= $filename ?></a></li>
                <?php
            }
        }
    }
    ?> </ul> <?php
}

// ----

    $path = __DIR__ . '/container';
    $link = BASE_URL . '/container';

    editFile($path);
    scanFolder($path, $link);

?>


    <?php
    if (isset($_GET['filename'])) {
        ?>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
            <textarea name="content" id="" cols="80" rows="30"><?php
                if (is_dir($path.'/'.$filename)) {
                    echo $filename;
                } elseif (is_file($path.'/'.$filename)) {
                    file_get_contents($_GET['filename']);
                }
                ?></textarea>
            <input type="hidden" name="filename" value="<?=$_GET['filename']?>">
            <br>
            <input type="submit" name="edit">
        </form>

        <?php
    }
    echo "<pre>"; print_r($dir); echo "</pre>";

    ?>
</body>
</html>