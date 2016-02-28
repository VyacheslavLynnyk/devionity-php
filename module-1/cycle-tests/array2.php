<?php

function createArr($elements, $dataType = 'num', $strLength = 5)
{
    $arr = [];
    for ($i = 0; $i < $elements; $i++){
        switch($dataType){
            case 's':
                $data = substr(md5($i), $strLength);
                break;
            default:
               // $data = rand(-$i * pow(10,$strLength), $i * pow(10,$strLength));
               $data = ($elements * 1000) + $i;
                break;
        }
            $arr[$i] = $data;
    }
    return $arr;
}

function for_2Arrays($arrays)
{
    $startTime = microtime(true);
    $count = sizeof($arrays);
    for ($j = 0; $j < $count; $j++) {
        $count2 = sizeof($arrays[$j]);
        for ($i = 0; $i < $count2; $i++) {
            $arrays[$j][$i] = $arrays[$j][$i] - 15;
        }
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function foreach_2Arrays($arrays)
{
    $startTime = microtime(true);
    foreach ($arrays as $j => $array) {
        foreach ($array as $i => $value) {
            $myArray[$j][$i] = $value - 15;
        }
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function while_2Arrays($array)
{
    $startTime = microtime(true);
    $i = 0;
    $j = 0;
    $count = sizeof($array);
    while ($j < $count) {
        $count2 = sizeof($array[$j]);
        while ($i < $count2) {
            $array[$j][$i] = $array[$j][$i] - 15;
            $i++;
        }
        $i = 0;
        $j++;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function doWhile_2Arrays($array)
{
    $startTime = microtime(true);
    $i = 0;
    $j = 0;
    $count = sizeof($array);
    do {
        $count2 = sizeof($array[$j]);
        do {
            $array[$j][$i] = $array[$j][$i] - 15;
            $i++;
        } while ($i < $count2);
        $i = 0;
        $j++;
    } while ($j < $count);
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function printRes($for, $foreach, $while, $doWhile)
{
    unset($for[0], $while[0], $foreach[0], $doWhile[0]);
    $whileAv = array_sum($while)/sizeof($while);
    $doWhileAv = array_sum($doWhile)/sizeof($doWhile);
    $forAv = array_sum($for)/sizeof($for);
    $foreachAv = array_sum($foreach)/sizeof($foreach);
    $max = max($forAv, $foreachAv, $whileAv, $doWhileAv);
    $data = "<h2>От каждого елемена отнимаем 15, 3000x3000 елементов 2-хмерного масива</h2>\n"
        . 'test while - %' . ($whileAv / $max) * 100 . ' time: ' . $whileAv . "<br>\n"
        . 'test Do while - %' . ($doWhileAv / $max) * 100 . ' time: ' . $doWhileAv . "<br>\n"
        . 'test for - %' . ($forAv / $max) * 100 . ' time: ' . $forAv . "<br>\n"
        . 'test foreach - %' . ($foreachAv / $max) * 100 . ' time: ' . $foreachAv . "<br>\n\n";
    echo $data;
    $path = 'test---2Arrays_(3000)_'.date('d_hms').".txt";
    //var_dump($path);
    file_put_contents($path, $data, FILE_APPEND);
}



//$elements = 100;
//$elements = 1000;
$elements = 3000;

//for ($k = 0; $k < 100; $k++) {
    for ($j = 0; $j < $elements; $j++) {
        $testArr[$j] = createArr($elements);
    }
//}

//echo '<pre>'; print_r($testArr3_100_100_100); echo '</pre>';
?>
<h1> Тест скорости циклов </h1>

<?php
for($j = 1; $j <= 2; $j++) {
    for ($i = 0; $i <= 10; $i++) {
        $foreach[$i] = foreach_2Arrays($testArr);
        $while[$i] = while_2Arrays($testArr);
        $doWhile[$i] = doWhile_2Arrays($testArr);
        $for[$i] = for_2Arrays($testArr);

    }
    printRes($for, $foreach, $while, $doWhile);
}


