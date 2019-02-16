<?php

fscanf(STDIN, '%d %d', $N, $M);

$person = [];
for ($i = 1; $i <= $N; ++$i) {
    $person[$i] = explode(' ', fgets(STDIN));
}

$like = [];

for ($j = 1; $j <= $person[1][0]; ++$j) {
    $like[] =  str_replace(["\r\n", "\r", "\n"], '', $person[1][$j]);
}

for ($k = 2; $k <= $N; ++$k) {
    $new_like = [];
    for ($l = 1; $l <= $person[$k][0]; ++$l) {
        if (in_array(str_replace(["\r\n", "\r", "\n"], '', $person[$k][$l]), $like)) {
            $new_like[] = str_replace(["\r\n", "\r", "\n"], '', $person[$k][$l]);
        }
    }
    $like = $new_like;
}

echo count($like);
