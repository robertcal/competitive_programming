<?php

fscanf(STDIN, '%d %d', $n, $y);

$value = $y - 1000 * $n;
$max_i = floor($value / 9000);
$max_j = floor($value / 4000);

$a = -1;
$b = -1;
$c = -1;

for ($i = 0; $i <= $max_i; $i++) {
    for ($j = 0; $j <= $max_j; $j++) {
        if (9000 * $i + 4000 * $j === $value && $n - $i - $j >= 0) {
            $a = $i;
            $b = $j;
            $c = $n - $a - $b;
            break;
        }
    }
}

echo $a . ' ' . $b . ' ' . $c;
