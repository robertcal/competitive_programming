<?php

//入力値
fscanf(STDIN, '%d %d', $a, $b);

if (($a * $b) % 2 === 0) {
    echo 'Even';
} else {
    echo 'Odd';
}
