<?php

fscanf(STDIN, '%d %d %d', $A, $B, $K);

$min = min($A, $B);

$count = 0;
for ($i = $min; $i > 0; --$i) {
    if ($A % $i === 0 && $B % $i === 0) {
        ++$count;
    }
    
    if ($count === $K) {
        echo $i;
        break;
    }
}
