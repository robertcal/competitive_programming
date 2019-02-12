<?php

fscanf(STDIN, '%d', $a); //1行目
fscanf(STDIN, '%d %d', $b, $c); //2行目
fscanf(STDIN, '%s', $s); //3行目

echo ($a + $b + $c) . ' ' . $s . "\n";
