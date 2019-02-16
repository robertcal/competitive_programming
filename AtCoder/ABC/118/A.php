<?php

fscanf(STDIN, '%d %d', $A, $B);

if ($B % $A === 0) {
    echo $A + $B;
} else {
    echo $B - $A;
}
