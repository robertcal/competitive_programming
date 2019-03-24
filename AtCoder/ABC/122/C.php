<?php

fscanf(STDIN, '%d %d', $N, $Q);
fscanf(STDIN, '%s', $S);

$s_array = str_split($S);
$A = false;
$list = [];

foreach ($s_array as $key => $value) {
    if ($value === 'C' && $A) {
        $list[] = $key;
    }
    
    if ($value === 'A') {
        $A = true;
    } else {
        $A = false;
    }
}

for ($i = 0; $i < $Q; ++ $i) {
    $count = 0;
    fscanf(STDIN, '%d %d', $l, $r);
    
    foreach ($list as $value) {
        if ($value >= $r) {
            break;
        }
        
        if ($l <= $value && $value < $r) {
            ++$count;
        }
    }
    
    echo $count . "\n";
}