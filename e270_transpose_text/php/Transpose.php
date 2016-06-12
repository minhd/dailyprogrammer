<?php

$fileName = $argv[1];

$content = file_get_contents($fileName);

$lines = explode("\n", $content);

// determine maxLength
$maxLength = 0;
foreach ($lines as $line) {
    if (strlen($line) > $maxLength) {
        $maxLength = strlen($line);
    }
}

// Transpose
$result = [];
for ($i = 0; $i < $maxLength; $i++) {
    $tranposed = "";
    foreach ($lines as $line) {
        $tranposed .= ($i < strlen($line)) ? $line[$i] : ' ';
    }
    $result[] = $tranposed;
}

echo implode("\n", $result);