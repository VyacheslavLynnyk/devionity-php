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

$testArr1 = createArr(1000000);
$testArr1_10000_s = createArr(1000000, 's');

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
for($j = 1; $j <= 2; $j++) {
    for ($i = 0; $i <= 5; $i++) {
        $for[$i] = forBanchmark($testArr1);
        $foreach[$i] = foreachBanchmark($testArr1);
        $while[$i] = whileBanchmark($testArr1);

    }
    printRes($for, $foreach, $while);
}
function printRes($for, $foreach, $while)
{
    unset($for[0], $while[0], $foreach[0]);
    $whileAv = array_sum($while)/sizeof($while);
    $forAv = array_sum($for)/sizeof($for);
    $foreachAv = array_sum($foreach)/sizeof($foreach);
    $max = max($forAv, $foreachAv, $whileAv);
    $data = "<h2>От каждого елемена отнимаем 15, 1000000 елементов масива</h2>\n"
    . 'test while - %' . ($whileAv / $max) * 100 . ' time: ' . $whileAv . "<br>\n"
    . 'test for - %' . ($forAv / $max) * 100 . ' time: ' . $forAv . "<br>\n"
    . 'test foreach - %' . ($foreachAv / $max) * 100 . ' time: ' . $foreachAv . "<br>\n";
    echo $data;
    $path = 'test--Arrays'.date('d_hms').".txt";
    var_dump($path);
    file_put_contents($path, $data, FILE_APPEND);
}


echo '<h2>Каждый елемент </h2>';
echo 'test while: '. whileBanchmark($testArr1_10000_s), '<br>';
echo 'test for: '. forBanchmark($testArr1_10000_s) . '<br>';
echo 'test foreach: '. foreachBanchmark($testArr1_10000_s) . '<br>';


