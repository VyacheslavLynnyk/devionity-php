<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Notepad</title>
    <style>
        body {
            margin:0;
            padding: 0;
        }
        html, body, form, .container {
            height: 100%;
        }
        table {
            margin: auto;
            width: 90%;
            height: 100%;
            border-collapse: collapse;
        }
        .textwrapper {
            border:1px solid #999999;
            margin:5px 0;
            padding:3px;
            height: 100%;
        }
        #text {
            display: block;
            width: 100%;
            min-height: 600px;
            height: inherit;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        #folders {
            background: lightsteelblue;
            /*padding: 3px;*/
            width: 20%;
            vertical-align: top;
        }
        #note-head {
            background: lightsteelblue;

        }
        .folder {
            border-top: 1px dotted brown;
            color: brown;
        }
        .folder, .file {
            display: block;
            padding: 13px 5px 2px 10px;
            /*width: 100%;*/
            /*height: 20px;*/
            background: white;
        }
        .file {
            color: #3056a0;
        }
        .rename {
            visibility: hidden;
            text-align: right;
            padding-left: 30px;
            font-size: 10px;
        }
        #folders > .folder:hover > .rename:first-child,
        .folder > .file:hover > .rename:first-child,
        .folder > .folder:hover > .rename:first-child {
            visibility: visible;
            link: green;
        }
        .logo {
            padding: 10px;
            font-size: 2em;
            text-align: right;
        }

    </style>
</head>
<body>
<?php include_once __DIR__ . '/func.lib.php'; ?>
    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        <table>
            <tr id="note-head">
                <td><input type="submit" name="edit" value="Save"></td>
                <td class="logo">Notepad+-</td>
            </tr>
            <tr>
                <td id="folders">
                    <?php scanFolder($path, $link);
//                    if (isset($_GET['filename'])) {
//                        $filename = $_GET['filename'];
//                        if (is_dir($filename)) {
//                            scanFolder($filename, $filename);
//                        }
//                    }
                    //print_r($filename);?>
                </td>
                <td>
                    <?php if (isset($_GET['filename'])) : ?>
                        echo 'ok';
                        <div class="textwrapper">
                            <textarea name="content" id="text"><?php
                                $filename = $_GET['filename'];

                                 if (is_file($filename)) {
                                    $file = file_get_contents(__DIR__.'/container/file3.txt');
                                    echo $file;
                                }
                          ?></textarea>

                            <input type="hidden" name="filename" value="<?=$_GET['filename']?>">
                        </div>
                    <?php
                    endif ?>
                </td>
            </tr>
            <tr>
                <td colspan="2"> status bar </td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>