<?php

fscanf(STDIN, '%d %d', $N, $M);

$person = [];
for ($i = 1; $i <= $N; ++$i) {
    $person[$i] = explode(' ', trim(fgets(STDIN))); //trimで改行が取り除けます
}

$like = [];

for ($j = 1; $j <= $person[1][0]; ++$j) {
    $like[] = $person[1][$j];
}

for ($k = 2; $k <= $N; ++$k) {
    $new_like = [];
    for ($l = 1; $l <= $person[$k][0]; ++$l) {
        if (in_array($person[$k][$l], $like)) {
            $new_like[] = $person[$k][$l];
        }
    }
    $like = $new_like;
}

echo count($like);
