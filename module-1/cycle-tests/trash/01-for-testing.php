<?php


function forTest1($from, $to)
{
    $info['iteration'] = $to - $from;

    $startTime = microtime(true);
    for( ; $from<= $to; $from++){
        $a[] = $from * 3456;
    }
    $stopTime = microtime(true);

    $info['time'] = $stopTime - $startTime;
    $info['cycle']  = __FUNCTION__;
    return $info;
}

function printInfile($cycle, $maxStep)
{
    $data = $cycle[$maxStep][1]['cycle']."\n";
    foreach($cycle as $step => $res){
        $sum = 0;
        foreach($res as $accuracy => $info) {
            $sum += $info['time'];
        }

        $data .= $cycle[$step][1]['iteration'].':'.($sum/sizeof($res))."\n";

    }
    $path = 'test--'.$cycle[$maxStep][1]['cycle'].".txt";
    var_dump($path);
    file_put_contents($path, $data);
}
?>

<h1> Тест скорости циклов </h1>

<?php
$from = 0;
$accuracy = 20;
$maxStep = 7;
for ($step = 4; $step <= $maxStep; $step++) {
    $to = pow(10, $step);
    for ($iter = 0; $iter <= $accuracy; $iter++) {
        $cycle[$step][$iter] = forTest1($from, $to);
    }
    unset($cycle[$step][0]);
    //$cycle[$step]['averageTime'] = array_sum($cycle[$step]) / sizeof($cycle[$step]);
}

echo '<h2>Умножение чисел</h2>';
echo "Тест - ".$cycle[$maxStep][1]['cycle']." для ".$cycle[$maxStep][1]['iteration']." повторений<br>";
echo '<pre>'; print_r($cycle); echo '</pre>';
printInfile($cycle, $maxStep);


echo '<h2>Каждый елемент </h2>';