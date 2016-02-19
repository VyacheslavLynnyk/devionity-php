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

function forBanchmark($array)
{
    $startTime = microtime(true);
    $count = sizeof($array);
    for ($i = 0; $i < $count; $i++) {
        $array[$i] = $array[$i] - 15;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function foreachBanchmark($array)
{
    $startTime = microtime(true);
    foreach ($array as $key => $value) {
        $array[$key] = $value - 15;
    }
    $stopTime = microtime(true);
    return $stopTime - $startTime;
}

function whileBanchmark($array)
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

$testArr1_10000 = createArr(10000);
$testArr1_10000_s = createArr(100000, 's');

//$testArr1_1000000 = [];
//$testArr2_100_100 = [];
//$testArr3_100_100_100 = [];
//
////$testArr1_1000000 = createArr($testArr1_1000000, 1000000);
//
//for ($j = 0; $j < 1000; $j++) {
//    $testArr2_100_100[$j] = createArr($testArr2_100_100, 1000);
//}
//for ($k = 0; $k < 100; $k++) {
//    for ($j = 0; $j < 100; $j++) {
//        $testArr3_100_100_100[$k][$j] = createArr($testArr3_100_100_100, 100);
//    }
//}

//echo '<pre>'; print_r($testArr3_100_100_100); echo '</pre>';
?>
<h1> Тест скорости циклов </h1>

<?php
$while = whileBanchmark($testArr1_10000);
$for = forBanchmark($testArr1_10000);
$foreach = foreachBanchmark($testArr1_10000);
$max  = max($while, $for, $foreach);


echo '<h2>От каждого елемена отнимаем 15</h2>';
echo 'test while - %'. ($while/$max) * 100 . ' time: ' . $while, '<br>';
echo 'test for - %'. ($for/$max) * 100 . ' time: ' . $for . '<br>';
echo 'test foreach - %'. ($foreach/$max) * 100 . ' time: ' . $foreach . '<br>';



echo '<h2>Каждый елемент </h2>';
echo 'test while: '. whileBanchmark($testArr1_10000_s), '<br>';
echo 'test for: '. forBanchmark($testArr1_10000_s) . '<br>';
echo 'test foreach: '. foreachBanchmark($testArr1_10000_s) . '<br>';


