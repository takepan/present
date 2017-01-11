<?php
/*
    Problem URL : http://arc066.contest.atcoder.jp/tasks/arc066_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */
// define('DEBUG', true);
define('DEBUG', false);
define('MOD', pow(10, 9) + 7);

$N = 3;
$ans = 0;

echo calc(1422);
exit;

for ($i = 1; $i < 1000; $i++) {
    echo "{$i} ";
    echo calc($i) . " " . (calc($i) - calc($i-1)) .PHP_EOL;
}

function calc($N) {
    for ($i = 0; $i <= $N; $i++) {
        for ($j = 0; $j <= $N - $i; $j++) {
            $c1 = ($i ^ $j) ?: 0;
            $c2 = $i + $j;
            // if ($c1 == $c2) {
                if (!isset($array[$c1][$c2])) {
                    // echo "i:{$i} j:{$j} c1:{$c1} c2:{$c2}\n";
                    $ans++;
                }
                $array[$c1][$c2] = 1;
            // }
        }
    }
    // echo $ans . PHP_EOL;    
    return $ans;
}
