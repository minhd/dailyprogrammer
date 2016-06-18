<?php

function calc($d, $h) {
    $prob = 1;
    while ($h > $d) {
        $prob *= 1.0 / $d;
        $h -= $d;
    }
    if ($h > 0) {
        $prob *= (1.0 + $d - $h) / $d;
    }
    return $prob;
}
/**
 *
 *
 */

echo calc(4,1). "\n"; //1
echo calc(4,4). "\n"; //0.25
echo calc(4,5). "\n"; //0.25
echo calc(4,6). "\n"; //0.1875
echo calc(1,10). "\n"; //  1
echo calc(100,200). "\n"; // 0.0001
echo calc(8,20). "\n"; //  0.009765625