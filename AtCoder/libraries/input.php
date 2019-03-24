<?php

//1行で個数が決まっている入力
fscanf(STDIN, '%d', $N);

//1行で個数が決まっていない入力
array_map('intVal', explode(' ', trim(fgets(STDIN))));

//複数行で個数が決まっている入力
$list = [];
for ($i = 1; $i <= $N; ++$i) {
    $list[] = (int)trim(fgets(STDIN));
}

