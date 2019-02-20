<?php

fscanf(STDIN, '%d', $N);
$list = [];
for ($i = 1; $i <= $N; ++$i) {
    $list[] = array_map('intVal', explode(' ', trim(fgets(STDIN))));
}

$dp = [];
$dp[0][0] = 0;
$dp[0][1] = 0;
$dp[0][2] = 0;

for ($j = 1; $j <= $N; ++$j) {
    for ($k = 0; $k <= 2; ++$k) {
        $remain = [0, 1, 2];
        unset($remain[$k]);
        $remain = array_values($remain);
        $dp[$j][$k] = max($dp[$j-1][$remain[0]] + $list[$j-1][$k], $dp[$j-1][$remain[1]] + $list[$j-1][$k]);
    }
}

echo max($dp[$N][0], $dp[$N][1], $dp[$N][2]);
