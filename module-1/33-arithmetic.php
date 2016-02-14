<?php

$daysInYear = 365;
$houesInDay = 24;
$seconds = $daysInYear * $houesInDay * 60 * 60 * 60;

echo "Секунд в году: " . $seconds . "<br>";
echo "Остаток от деления на 2: ". ($seconds % 2);
?>