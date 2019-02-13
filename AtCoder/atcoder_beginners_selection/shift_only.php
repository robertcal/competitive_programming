<?php

$n = fgets(STDIN);
$list = explode(' ', fgets(STDIN));

$result = [];
foreach ($list as $number) {
    $number = (int)$number;
    $count = 0;
    while($number % 2 === 0) {
        $count++;
        $number = $number / 2;
    }
    
    $result[] = $count;
}

echo min($result);