<?php
function simpleNum($from, $to)
{
    for ($i = $from; $i < $to; $i++){
        if ($i > -11 && $i < 11) {
            if ( strpos('12357',(string) abs($i)) !== false ) {
                echo $i . ' ';

            }
        } else {
            if (
                ($i % 2) && ($i % 3) && ($i % 5) && ($i % 7)
                && (sqrt(abs($i)) !== floor(sqrt(abs($i))))
            ) {
                echo $i . ' ';
            }
        }
    }
}

simpleNum(-170, 170);