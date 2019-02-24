<?php

fscanf(STDIN, '%d', $N);
$line = array_map('intVal', explode(' ', trim(fgets(STDIN))));

rsort($line);

$other_sum = 0;
for ($i = 1; $i <= $N-1; ++$i) {
    $other_sum += $line[$i];
}

if ($line[0] < $other_sum) {
    echo 'Yes';
} else {
    echo 'No';
}
