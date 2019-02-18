<?php

fscanf(STDIN, '%d', $N);
$h = array_map('intVal', explode(' ', trim(fgets(STDIN))));

$dp = [];
$dp[1] = 0;
$dp[2] = abs($h[1] - $h[0]);

for ($i = 3; $i <= $N; ++$i) {
    $dp[$i] = min($dp[$i-1] + abs($h[$i-1] - $h[$i-2]), $dp[$i-2] + abs($h[$i-1] - $h[$i-3]));
}

echo $dp[$N];
