<?php

function doWhileTest($from, $to){
    $startTime = microtime(true);
    do {
        $a[] = $from * 3456;
        $from++;
    } while($from <= $to);
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}
function whileTest($from, $to){
    $startTime = microtime(true);
    while($from <= $to){
        $a[] = $from * 3456;
        $from++;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}
function forTest($from, $to){
    $startTime = microtime(true);
    for( ; $from<= $to; $from++){
        $a[] = $from * 3456;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

?>

<h1> Тест скорости циклов </h1>

<?php
$from = 0;
$to =  100000;
for ($iter = 0; $iter < 200; $iter++) {
//    $for[] = forTest($from, $to);
    $while[] = whileTest($from, $to);
//    $doWhile[] = doWhileTest($from, $to);
    //$max = max($while, $for, $doWhile);
}
$forAvarege = array_sum($for)/sizeof($for);
$forAvarege = array_sum($for)/sizeof($for);
//$forAvarege = array_sum($for)/sizeof($for);

echo '<h2>Умножение чисел</h2>';
//echo 'test while - %'. ($while/$max) * 100 . ' time: ' . $while, '<br>';
echo 'test for - time: ' . $forAvarege . '<br>';
//echo 'test do while - %'. ($doWhile/$max) * 100 . ' time: ' . $doWhile . '<br>';



echo '<h2>Каждый елемент </h2>';