<?php

fscanf(STDIN, '%d', $N);
$life = array_map('intval', explode(' ', fgets(STDIN))); //入力を数値として配列に入れる

echo all_gcd($life);

function all_gcd($life) {
    $ans = $life[0];
    for ($i = 1; $i < count($life); ++$i) {
        $ans = gcd($ans, $life[$i]);
    }
    
    return $ans;
}

//a,bどちらが大きくても問題ない
function gcd($a, $b) {
    if ($b === 0) {
        return $a;
    } else {
        return gcd($b, $a % $b);
    }
}
