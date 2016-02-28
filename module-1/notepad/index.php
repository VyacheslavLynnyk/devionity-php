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
        .folder, .files {
            display: block;
            padding: 13px 5px 2px 10px;
            /*width: 100%;*/
            /*height: 20px;*/
            background: white;
        }
        .files {
            color: #3056a0;
        }
        .rename {
            visibility: hidden;
            text-align: right;
            padding-left: 30px;
            font-size: 10px;
        }
        #folders > .folder:hover > .rename:first-child,
        .folder > .files:hover > .rename:first-child,
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

    <div class="container">
        <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
        <table>
            <tr id="note-head">
                <td><input type="submit" name="edit" value="Save"></td>
                <td class="logo">Notepad+-</td>
            </tr>
            <tr>
                <td id="folders">
                    <div class="folder">
                        Dir1 <span class="rename"><a href="">rename</a></span>
                    </div>
                    <div class="folder">
                        Dir2 <span class="rename">rename</span>
                        <div class="folder">
                            Dir3 <span class="rename">rename</span>
                            <div class="files">
                                File_1.txt <span class="rename">rename</span>
                            </div>
                            <div class="files">
                                File_1.txt <span class="rename">rename</span>
                            </div>
                            <div class="files">
                                File_1.txt <span class="rename">rename</span>
                            </div>
                            <div class="folder">
                                Dir4 <span class="rename">rename</span>
                                <div class="files">
                                    File_1.txt <span class="rename">rename</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="textwrapper">
                        <textarea name="content" id="text"><?php
                            if (is_dir($path.'/'.$filename)) {
                                echo $filename;
                            } elseif (is_file($path.'/'.$filename)) {
                                file_get_contents($_GET['filename']);
                            }
                      ?></textarea>
                        <input type="hidden" name="filename" value="<?=$_GET['filename']?>">
                    </div>
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