<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <style>
        body {

        }
        div {
            margin: auto;
            width: 100%
        }
        div ul {
            /*width: 80%;*/
            background: radial-gradient(50% 30%, #7999af, #3056a0);
            margin:auto;
            text-align: left;
            padding: 30px;
            border: 4px dashed white;
        }
        div li{
            margin: 20px 10px;
            display: block;
            color: white;

            height: inherit;
        }
        div a {
            display: inline-block;
            color: white;
            border: 2px solid white;
            padding: 4px;
            border-radius: 10px;
            font: 1.3em Arial, sans-serif;
            font-weight: 700;
            text-align: center;
            line-height: 2em;
            width: 15em;
            height: 2em;
            box-shadow: 14px 14px 14px black;

            transition: color 1s;
            transition: background  500ms;
            transition: box-shadow  500ms;
        }
        div a > span {
            /*height: inherit;*/
            /*line*/
        }

        div a:hover {
            color: #3056a0;
            background: white;
            box-shadow: 1px 1px 20px white,
                        0px 0px 14px #aaaaaa;
        }

        div a:link {
            text-decoration: none;
        }
    </style>
</head>

<body>

<?php
    $filesArr = scandir('.');
    $sitesArr = ['Home Page' => '/index.php'];
    foreach($filesArr as $file) {
        $path_parts = pathinfo($file);
        if ( !empty($path_parts['extension'])
            && ( strtolower($path_parts['extension']) === 'php'
                || strtolower($path_parts['extension']) === 'html') ) {
            $name = strtolower($path_parts['filename']);
            $name = ucwords( str_replace('-', ' ', $name) );
            if ($name !== "Index" ) {
                $sitesArr[$name] = $path_parts['basename'];
            }
        }
    }
?>
    <div>
        <ul>
            <?php foreach($sitesArr as $title=>$href): ?>
                <li><a href="<?=$href?>"><?=$title?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</body>
</html>

