<?php

fscanf(STDIN, '%s', $S);

$count_1 = substr_count($S, '1');
$count_0 = substr_count($S, '0');

echo 2 * min($count_1, $count_0);
