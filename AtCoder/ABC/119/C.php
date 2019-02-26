<?php

fscanf(STDIN, '%d %d %d %d', $N, $A, $B, $C);
$list = [];
for ($i = 1; $i <= $N; ++$i) {
    $list[] = (int)trim(fgets(STDIN));
}

$MP = 0;

$target = [$A, $B, $C];

if (in_array($A, $list)) {
    $target = array_values(array_diff($target, [$A]));
    $list = array_values(array_diff($list, [$A]));
}
if (in_array($B, $list)) {
    $target = array_values(array_diff($target, [$B]));
    $list = array_values(array_diff($list, [$B]));
}
if (in_array($C, $list)) {
    $target = array_values(array_diff($target, [$C]));
    $list = array_values(array_diff($list, [$C]));
}

if ($target === []) {
    echo $MP;
} else {
    if (min($list) > min($target)) {
        $MP += min($list) - min($target);
        $target = array_values(array_diff($target, [min($target)]));
        $list = array_values(array_diff($list, [min($list)]));
    }
    
    
}