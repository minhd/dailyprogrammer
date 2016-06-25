<?php

//letter, count, score
$bag = [['A',9,1], ['B',2,3], ['C',2,3], ['D',4,2], ['E',12,1], ['F',2,4], ['G',3,2], ['H',2,4], ['I',9,1], ['J',1,8], ['K',1,5], ['L',4,1], ['M',2,3], ['N',6,1], ['O',8,1], ['P',2,3], ['Q',1,10], ['R',6,1], ['S',4,1], ['T',6,1], ['U',4,1], ['V',2,4], ['W',2,4], ['X',1,8], ['Y',2,4], ['Z',1,10], ['_',2,0] ];

$inputs = [
    'PQAREIOURSTHGWIOAE_',
    'LQTOONOEFFJZT',
    'AXHDRUIOR_XHJZUQEE'
];

function scrabbleRemain($input, $bag) {
    $playBag = $bag;
    $playHand = str_split($input);
    foreach ($playHand as $piece) {
        foreach ($playBag as &$bagPiece) {
            if ($piece == $bagPiece[0]) {
                $bagPiece[1]--;
            }

            if ($bagPiece[1] < 0) {
                return "Invalid input. More $piece's have been taken from the bag than possible";
            }
        }
    }

    $resultHand = [];
    foreach ($playBag as $bagPiece) {
        if (!array_key_exists($bagPiece[1], $resultHand)) {
            $resultHand[$bagPiece[1]] = [$bagPiece[0]];
        } else {
            $resultHand[$bagPiece[1]][] = $bagPiece[0];
        }
    }

    ksort($resultHand);
    $resultHand = array_reverse($resultHand, true);
    $result = "";
    foreach ($resultHand as $key=>$r) {
        $result .= $key.": ". implode(', ', $r). "\n";
    }
    return $result;
}

foreach ($inputs as $input) {
    echo "Input: ". $input."\n";
    echo scrabbleRemain($input, $bag);
    echo "\n";
}