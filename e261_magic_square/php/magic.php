<?php

$square = [8, 1, 6, 3, 5, 7, 4, 9, 2];

/**
 *  8 1 6
    3 5 7
    4 9 2
 */


function isMagic($square) {

    // find out dimension
    $dimension = sqrt(sizeof($square));

    if ($dimension > (int) $dimension){

        $dimension = ceil($dimension);

        // get missing rows
        $missingRow = [];

        // calculate goal beforehand
        $goal = 0;
        for ($i=0;$i<$dimension;$i++) {
            $goal += $square[$i];
        }

        // get missing row by calculating the difference
        // between the goal and the subSquare column
        $subSquare = array_chunk($square, $dimension);
        for ($i=0;$i < $dimension;$i++) {
            $sum = array_sum(array_column($subSquare, $i));
            $missingRow[] = $goal - $sum;
        }

        // add missing row back
        $square = array_merge($square, $missingRow);
    }

    // split into square sized
    $square = array_chunk($square, $dimension);

    // check horizontal and set goal
    $goal = null;
    for ($i = 0;$i<$dimension;$i++) {
        $sum = array_sum($square[$i]);
        if ($goal === null) $goal = $sum;
        if ($sum != $goal) {
            return false;
        }
    }

    // check column
    for ($i=0;$i < $dimension;$i++) {
        $sum = array_sum(array_column($square, $i));
        if ($sum != $goal) {
            return false;
        }
    }

    // check diagonal left to right
    $sum = 0;
    $j = 0;
    for ($i=0;$i < $dimension;$i++) {
        $sum += $square[$i][$j];
        $j++;
    }
    if ($sum != $goal) {
        return false;
    }

    // check diagonal right to left
    $sum = 0;
    $j = $dimension - 1;
    for ($i=0;$i < $dimension;$i++) {
        $sum+= $square[$i][$j];
        $j--;
    }
    if ($sum != $goal) {
        return false;
    }

    return true;
}

$testCases = [
    [8, 1, 6, 3, 5, 7, 4, 9, 2],
    [2, 7, 6, 9, 5, 1, 4, 3, 8],
    [3, 5, 7, 8, 1, 6, 4, 9, 2],
    [8, 1, 6, 7, 5, 3, 4, 9, 2],
    [7,2,3,5,3,9,2,2,4,3,1,5,6,3,5,1,5,6,2,6,2,6,3,6,3],
    [14, 1, 12, 7, 11, 8, 13, 2, 5, 10, 3, 16,
    // 4, 15, 6, 9
    ]
];

foreach ($testCases as $case) {
    echo "[".implode(',',$case)."] -> "
    . (isMagic($case) ? "true" : "false")
    . "\n";
}