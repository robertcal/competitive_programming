<?php

fscanf(STDIN, '%d %d %d', $n, $a, $b);
$total = 0;

for ($i = 1; $i <= $n; $i++) {
    $sum = Sum($i);
    if ($sum >= $a && $sum <= $b) {
        $total += $i;
    }
}

echo $total;

function Sum($number) {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = floor($number / 10);
    }
    
    return $sum;
}
