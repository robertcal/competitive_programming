<?php

fscanf(STDIN, '%s', $S);

$count = 0;
$flag = true;
while ($flag) {
    $flag = false;
    if ($count_10 = substr_count($S, '10') !== 0) {
        $count += 2 * $count_10;
        $S = str_replace('10', '', $S);
        $flag = true;
    }
}

$flag = true;
while ($flag) {
    $flag = false;
    if ($count_01 = substr_count($S, '01') !== 0) {
        $count += 2 * $count_01;
        $S = str_replace('01', '', $S);
        $flag = true;
    }
}

echo $count;
