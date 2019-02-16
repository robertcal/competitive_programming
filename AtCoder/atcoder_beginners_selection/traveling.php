<?php

fscanf(STDIN, '%d', $n);

$point = ['t' => 0, 'x' => 0, 'y' => 0];
$i = 1;
while ($stdin = fgets(STDIN)) {
    list($point[$i]['t'], $point[$i]['x'], $point[$i]['y']) = explode(' ', $stdin);
    ++$i;
}

$result = true;

for ($j = 0; $j <= $n-1; ++$j) {
    $diff_t = (int)$point[$j+1]['t'] - (int)$point[$j]['t'];
    $diff_x = (int)$point[$j+1]['x'] - (int)$point[$j]['x'];
    $diff_y = (int)$point[$j+1]['y'] - (int)$point[$j]['y'];
    
    if (($diff_t + $diff_x + $diff_y) % 2 === 0) {
        $count_x = ($diff_t + $diff_x + $diff_y) / 2;
        $count_y = $diff_t - $count_x;
        if ($count_x >= 0 && $count_y >= 0) {
            $result = true;
        } else {
            $result = false;
        }
    } else {
        $result = false;
    }
    
    if (!$result) {
        break;
    }
}

if ($result) {
    echo 'Yes';
} else {
    echo 'No';
}
