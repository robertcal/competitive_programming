<?php

fscanf(STDIN, '%d %d', $N, $M);
$numbers = explode(' ', fgets(STDIN));

$matchs = [
    1 => 2,
    7 => 3,
    4 => 4,
    5 => 5,
    3 => 5,
    2 => 5,
    9 => 6,
    6 => 6,
    8 => 7
];

$min = [];
foreach ($matchs as $key => $value) {
    if (in_array($key, $numbers)) {
        $min[$key] = $value ;
    }
}

$max = [];
foreach ($min as $key => $value) {
    $max[] = floor($N / $value);
}

