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
                $data = rand(-$i * pow(10,$strLength), $i * pow(10,$strLength));
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
            $count3 = sizeof($arrays[$i]);
            for ($k = 0; $k < $count3; $k++) {
                $arrays[$j][$i][$k] = $arrays[$j][$i][$k] - 15;
            }
        }
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function foreach_2Arrays($arrays)
{
    $startTime = microtime(true);
    foreach ($arrays as $firstKey => $array2) {
        foreach ($array2 as $secondKey => $array3) {
            foreach ($array3 as $thirdKey => $value) {
                $myArray[$firstKey][$secondKey][$thirdKey] = $value - 15;
            }
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
    $k = 0;
    $count = sizeof($array);
    while ($j < $count) {
        $count2 = sizeof($array[$j]);
        while ($i < $count2) {
            $count3 = sizeof($array[$j][$i]);
            while ($k < $count3) {
                $array[$j][$i][$k] = $array[$j][$i][$k] - 15;
                $k++;
            }
            $i++;
            $k = 0;
        }
        $j++;
        $i  = 0;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function doWhile_2Arrays($array)
{
    $startTime = microtime(true);
    $i = 0;
    $j = 0;
    $k = 0;
    $count = sizeof($array);
    do {
        $count2 = sizeof($array[$j]);
        do {
            $count3 = sizeof($array[$j][$i]);
            do {
                $array[$j][$i][$k] = $array[$j][$i][$k] - 15;
                $k++;
            } while ($k < $count3);
            $i++;
            $k = 0;
        } while ($i < $count2);
        $j++;
        $i  = 0;
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
    $data = "<h2>От каждого елемена отнимаем 15, 200x200x200 елементов 3-хмерного масива</h2>\n"
        . 'test while - %' . ($whileAv / $max) * 100 . ' time: ' . $whileAv . "<br>\n"
        . 'test Do while - %' . ($doWhileAv / $max) * 100 . ' time: ' . $doWhileAv . "<br>\n"
        . 'test for - %' . ($forAv / $max) * 100 . ' time: ' . $forAv . "<br>\n"
        . 'test foreach - %' . ($foreachAv / $max) * 100 . ' time: ' . $foreachAv . "<br>\n\n";
    echo $data;
    $path = 'test---3Arrays_(200)_'.date('d_hms').".txt";
    //var_dump($path);
    file_put_contents($path, $data, FILE_APPEND);
}



//$elements = 10;
//$elements = 100;
//$elements = 150;
$elements = 200;
//$elements = 250;

for ($k = 0; $k < $elements; $k++) {
    for ($j = 0; $j < $elements; $j++) {
        $testArr[$k][$j] = createArr($elements);
    }
}

?>
<h1> Тест скорости циклов </h1>

<?php
for($j = 1; $j <= 2; $j++) {
    for ($i = 0; $i <= 4; $i++) {
        $while[$i] = while_2Arrays($testArr);
        $doWhile[$i] = doWhile_2Arrays($testArr);
        $foreach[$i] = foreach_2Arrays($testArr);
        $for[$i] = for_2Arrays($testArr);

    }
    printRes($for, $foreach, $while, $doWhile);
}


