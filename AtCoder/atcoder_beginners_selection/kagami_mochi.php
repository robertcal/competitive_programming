<?php

$N = (int)fgets(STDIN);
$mochis = [];
while ($mochi = (int)fgets(STDIN)) {
    $mochis[] = $mochi;
}

echo count(array_values(array_unique($mochis)));
