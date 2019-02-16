<?php

fscanf(STDIN, '%d', $N);
$life = explode(' ', fgets(STDIN));

while(count($life) > 1) {
    sort($life);
    $new_life = [];
    $new_life[] = (int)$life[0];
    for ($i = 1; $i <= count($life)-1; ++$i) {
        if (($life_result = (int)$life[$i] % (int)$life[0]) !== 0)
            $new_life[] = $life_result;
    }
    $life = $new_life;
}

echo $life[0];
