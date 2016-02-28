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

function forTest1($array)
{
    $startTime = microtime(true);
    $count = sizeof($array);
    for ($i = 0; $i < $count; $i++) {
        $array[$i] = $array[$i] - 15;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function foreachTest1($array)
{
    $startTime = microtime(true);
    foreach ($array as $key => $value) {
        $array[$key] = $value - 15;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function whileTest1($array)
{
    $startTime = microtime(true);
    $i = 0;
    $count = sizeof($array);
    while ($i < $count) {
        $array[$i] = $array[$i] - 15;
        $i++;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function doWhileTest1($array)
{
    $startTime = microtime(true);
    $i = 0;
    $count = sizeof($array);
    do {
        $array[$i] = $array[$i] - 15;
        $i++;
    } while ($i < $count);
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
    $data = "<h2>От каждого елемена отнимаем 15, 100000 елементов масива</h2>\n"
        . 'test while - %' . ($whileAv / $max) * 100 . ' time: ' . $whileAv . "<br>\n"
        . 'test Do while - %' . ($doWhileAv / $max) * 100 . ' time: ' . $doWhileAv . "<br>\n"
        . 'test for - %' . ($forAv / $max) * 100 . ' time: ' . $forAv . "<br>\n"
        . 'test foreach - %' . ($foreachAv / $max) * 100 . ' time: ' . $foreachAv . "<br>\n";
    echo $data;
    $path = 'test---1Array(100000)_'.date('d_hms').".txt";
    //var_dump($path);
    file_put_contents($path, $data, FILE_APPEND);
}

//$testArr1 = createArr(1000);
//$testArr1 = createArr(10000);
$testArr1 = createArr(100000);

?>
<h1> Тест скорости циклов </h1>

<?php
for($j = 1; $j <= 2; $j++) {
    for ($i = 0; $i <= 10; $i++) {
        $foreach[$i] = foreachTest1($testArr1);
        $for[$i] = forTest1($testArr1);
        $while[$i] = whileTest1($testArr1);
        $doWhile[$i] = doWhileTest1($testArr1);
    }
    printRes($for, $foreach, $while, $doWhile);
}




