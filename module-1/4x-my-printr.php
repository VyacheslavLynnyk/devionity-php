<?php
function myPrint_r($variable, $tabs = 0)
{
    //var_dump(gettype($variable));
    if (gettype($variable) == 'array'){
        if ($tabs > 0 ) {
            $spaces = '    ';
            $spacesData = $spaces.'    ';
            for ($i = 0; $i < ($tabs); $i++){
                $spaces .= $spaces ;
            }
            $spacesData = $spaces.'    ';
        } else {
            $spaces = '';
            $spacesData = '    ';
        }
        $spacesData = $spaces. '    ';
        $tabs++;
        echo "Array\r", "$spaces(\r";
        foreach ($variable as $key => $value ){
            echo $spacesData."[$key] => ";
            myPrint_r($value, $tabs);
        }
        echo "$spaces)\n\r";
    } else {
        echo $variable."\n";
    }
}
$arr3 = array('2One', 'Tw3o', 33, '14', 35 => '54', 'sisx' => true, null);
$arr2 = array('2One', 'Tw3o', 33, $arr3, 35 => '54', 'sisx' => true, null);
$arr = array('One', 'Two', 3, '4', 5 => '5', 'six' => true, null, $arr2);

echo '<pre>';
print_r($arr);
echo '</pre><br>';
echo '<pre>';
print_r('string');
echo '</pre><br>';





echo '<pre>';

myPrint_r($arr);

echo '</pre>';