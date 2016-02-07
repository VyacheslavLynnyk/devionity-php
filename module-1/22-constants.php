<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Constants</title>
</head>
<body>
<h1>Constants</h1>
<pre><?php
    define('CENTER_CITY', 'Kyiv');
    define('EAST_CITY', 'Donetsl');
    define('WEST_CITY', 'Lviv');
    define('SOUTH_CITY', 'Sevastopol');

    $ukraineCitiesArr = [
        CENTER_CITY,
        EAST_CITY,
        WEST_CITY,
        SOUTH_CITY
    ];
    var_dump($ukraineCitiesArr);
    ?>
</pre>
</body>
</html>