<?php

$N = (int)fgets(STDIN);
$cards = explode(' ', fgets(STDIN));

rsort($cards, SORT_NUMERIC);
$alice = 0;
$bob = 0;

foreach ($cards as $key => $value) {
    if ((int)$key % 2 === 0) {
        $bob += (int)$value;
    } else {
        $alice += (int)$value;
    }
}

echo $bob - $alice;
