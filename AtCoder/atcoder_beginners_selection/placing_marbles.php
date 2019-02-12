<?php

//入力値
fscanf(STDIN, '%s', $string);

//配列に格納
$squares = str_split($string);

echo $squares[0] + $squares[1] + $squares[2];
