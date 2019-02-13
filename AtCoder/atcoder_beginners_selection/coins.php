<?php

$a = (int)fgets(STDIN);
$b = (int)fgets(STDIN);
$c = (int)fgets(STDIN);
$x = (int)fgets(STDIN);

$result = 0;

for ($i = 0; $i <= $a; $i++) {
    for ($j = 0; $j <= $b; $j++) {
        for ($k = 0; $k <= $c; $k++) {
            $total = 500 * $i + 100 * $j + 50 * $k;
            if ($total === $x) {
                $result++;
            }
        }
    }
}

echo $result;