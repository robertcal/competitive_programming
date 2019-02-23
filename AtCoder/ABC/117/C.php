<?php

fscanf(STDIN, '%d %d', $N, $M);
$point = array_map('intVal', explode(' ', trim(fgets(STDIN))));

if ($N >= $M) {
    echo 0;
} else {
    rsort($point);
    $distance = [];
    for ($i = 0; $i < $M-1; ++$i) {
        $distance[] = $point[$i] - $point[$i+1];
    }
    rsort($distance);
    array_splice($distance, 0, $N-1);
    
    echo array_sum($distance);
}
