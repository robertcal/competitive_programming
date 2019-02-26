<?php

fscanf(STDIN, '%d', $N);
$list = [];
for ($i = 1; $i <= $N; ++$i) {
    $list[] = explode(' ', trim(fgets(STDIN)));
}

$sum = 0;

foreach ($list as $value) {
    if ($value[1] === 'BTC') {
        $sum += 380000 * (float)$value[0];
    } else {
        $sum += (int)$value[0];
    }
}

echo $sum;
