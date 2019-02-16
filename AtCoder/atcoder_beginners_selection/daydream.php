<?php

fscanf(STDIN, '%s', $s);

$reverse = strrev($s);
$words = ['maerd', 'remaerd', 'esare', 'resare'];

$i = 0;

while($i < strlen($reverse)) {
    $can = false;
    foreach ($words as $word) {
        if (substr($reverse, $i, strlen($word)) === $word) {
            $i += strlen($word);
            $can = true;
            break;
        }
    }

    if (!$can) {
        break;
    }
}
    

if ($can) {
    echo 'YES';
} else {
    echo 'NO';
}
