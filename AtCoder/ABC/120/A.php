<?php

fscanf(STDIN, '%d %d %d', $A, $B, $C);

$max = (int)($B / $A);

if ($C <= $max) {
    echo $C;
} else {
    echo $max;
}
