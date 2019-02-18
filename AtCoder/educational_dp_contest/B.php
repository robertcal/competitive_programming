<?php

fscanf(STDIN, '%d %d', $N, $K);
$h = array_map('intVal', explode(' ', trim(fgets(STDIN))));

$dp = [];
$dp[1] = 0;
$dp[2] = abs($h[1] - $h[0]);

for ($i = 3; $i <= $N; ++$i) {
    $list = [];
    for ($j = 1; $j <= $K; ++$j) {
        if ($i-$j-1 < 0) {
            break;
        } 
        $list[] = $dp[$i-$j] + abs($h[$i-1] - $h[$i-$j-1]);
    }
    $dp[$i] = min($list);
}

echo $dp[$N];
