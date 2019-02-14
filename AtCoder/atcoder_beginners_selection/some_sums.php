<?php

fscanf(STDIN, '%d %d %d', $n, $a, $b);

$sum = 0;

for ($i = 1; $i <= $n; $i++) {
    $sum_figures = 0;
    $number = $i;
    
    $figure_10000 = floor($number / 10000);
    $number -= $figure_10000 * 10000;
    
    $figure_1000 = floor($number / 1000);
    $number -= $figure_1000 * 1000;
    
    $figure_100 = floor($number / 100);
    $number -= $figure_100 * 100;
    
    $figure_10 = floor($number / 10);
    $figure_1 = $number % 10;
    
    $sum_figures = $figure_10000 + $figure_1000 + $figure_100 + $figure_10 + $figure_1;
    
    if ($sum_figures >= $a && $sum_figures <= $b) {
        $sum += $i;
    }
}

echo $sum;
