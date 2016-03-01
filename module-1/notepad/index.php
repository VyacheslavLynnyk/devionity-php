<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Notepad</title>
    <link rel="stylesheet" href="style-notepad.css">
</head>
<body>
<?php include_once __DIR__ . '/func.lib.php'; ?>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF'].'?filename='.$path ?>" method="POST">
        <table>
            <tr id="note-head">
                <td><input type="submit" name="edit" value="Save"></td>
                <td class="logo">Notepad+-</td>
            </tr>
            <tr>
                <td id="folders">
                   <?php
                   $pathArr = getPathArr($path);
                   $filesArr = getFilesArr($pathArr);
                   showFilesPath($filesArr, $pathArr);
                   ?>
                </td>
                <td id="textfield">
                    <?php if (isset($_GET['filename'])) : ?>
                        <div class="textwrapper">
                            <textarea name="content" id="text"><?php
                                if (is_file(CONTAINER . $path)) {
                                    $file = file_get_contents(CONTAINER . $path);
                                    echo $file;
                                } elseif (is_dir(CONTAINER . $path)) {
                                    echo end($pathArr);
                                }
                          ?></textarea>

                            <input type="hidden" name="filename" value="<?=$_GET['filename']?>">
                        </div>
                    <?php
                    endif ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"> <!-- status bar --> &nbsp;</td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>