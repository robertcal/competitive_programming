<?php

fscanf(STDIN, '%d %d %d', $A, $B, $Q);

$shrines = [];
$shrines[] = -INF;
for ($i = 1; $i <= $A; ++$i) {
    $shrines[] = (int)trim(fgets(STDIN));
}
$shrines[] = INF;

$temples = [];
$temples[] = -INF;
for ($j = 1; $j <= $B; ++$j) {
    $temples[] = (int)trim(fgets(STDIN));
}
$temples[] = INF;

$points = [];
for ($k = 1; $k <= $Q; ++$k) {
    $points[] = (int)trim(fgets(STDIN));
}

foreach ($points as $point) {
    $right_shrine = upper_bound($shrines, $point);
    $right_temple = upper_bound($temples, $point);
    
    $res = INF;
    
    for ($l = $right_shrine; $l >= $right_shrine-1; --$l) {
        for ($m = $right_temple; $m >= $right_temple-1; --$m) {
            $d1 = abs($shrines[$l] - $point) + abs($temples[$m] - $shrines[$l]);
            $d2 = abs($temples[$m] - $point) + abs($shrines[$l] - $temples[$m]);
            
            $res = min($res, $d1, $d2);
        }
    }

    echo $res . "\n";
}

function lower_bound($array, $value) {
    $left = -1;
    $right = count($array);
    
    while ($right - $left > 1) {
        $middle = (int)($left + ($right - $left) / 2);
        
        if ($array[$middle] >= $value) {
            $right = $middle;
        } else {
            $left = $middle;
        }
    }
    
    return $right;
}

function upper_bound($array, $value) {
    $left = -1;
    $right = count($array);

    while ($right - $left > 1) {
        $middle = (int)($left + ($right - $left) / 2);

        if ($array[$middle] > $value) {
            $right = $middle;
        } else {
            $left = $middle;
        }
    }

    return $right;
}
