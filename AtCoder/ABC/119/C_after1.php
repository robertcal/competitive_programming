<?php

fscanf(STDIN, '%d %d %d %d', $N, $A, $B, $C);
$list = [];
for ($i = 1; $i <= $N; ++$i) {
    $list[] = (int)trim(fgets(STDIN));
}

function dfs($cur, $a, $b, $c) { //状態変数
    global $N, $A, $B, $C, $list;
    
    //深さが最後まで来た時（終了条件）
    if ($cur === $N) {
        //竹なしでは延長魔法、短縮魔法を使えない
        if (min($a, $b, $c) > 0) {
            //1本使うだけでは合成魔法の10MPは使わないので、10 * 3 = 30を引く
            return abs($A - $a) + abs($B - $b) + abs($C - $c) - 30;
        } else {
            return INF;
        }
    }
    
    //選択肢の列挙
    $ret0 = dfs($cur + 1, $a, $b, $c); //A、B、Cどれにも使わない場合
    $ret1 = dfs($cur + 1, $a + $list[$cur], $b, $c) + 10; //Aに使う場合
    $ret2 = dfs($cur + 1, $a, $b + $list[$cur], $c) + 10; //Bに使う場合
    $ret3 = dfs($cur + 1, $a, $b, $c + $list[$cur]) + 10; //Cに使う場合
    
    return min($ret0, $ret1, $ret2, $ret3);
}

echo dfs(0, 0, 0, 0);
