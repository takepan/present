<?php
/*
    Problem URL : http://tkppc2.contest.atcoder.jp/tasks/tkppc2016_d

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $H, $W, $K);

// 片道で終わる場合
if ($W % $K === 0) {
    echo "0\n";
}

$a = ($W / $K) - floor(($W / $K));
// echo $a . PHP_EOL;
$b = min($a, 1 - $a);
// echo $b . PHP_EOL;
$c = 1 / $b;
// echo $c . PHP_EOL;
// $oufuku = 1 / ($W / $K) - ;

// echo $oufuku . PHP_EOL;

echo lcm($W, $K) / $W;

//最大公約数
function gcd($m, $n){
    if($n > $m) list($m, $n) = array($n, $m);

    while($n !== 0){
        $tmp_n = $n;
        $n = $m % $n;
        $m = $tmp_n;
    }
    return $m;
}

//最小公倍数
function lcm($m, $n){
    return $m * $n / gcd($m, $n);
}
