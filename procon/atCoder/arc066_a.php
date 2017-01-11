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
fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
$b = array();
$ans = 1;
$c = array();

for ($i = 0; $i < $N; $i++) {
    $r = $i;
    $l = $N - $i - 1;
    $ab = abs($r - $l);
    $b[] = $ab;
}
sort($b);
sort($a);

if ($a == $b) {
    foreach ($b as $val) {
        $c[$val]++;
    }

    // var_dump($c);

    foreach ($c as $key => $val) {
        // echo "A {$key} {$val2} {$ans}\n";
        $ans *= $val;
        if ($ans > MOD) {
            $ans %= MOD;
        }
    }

    echo $ans . PHP_EOL;
} else {
    echo "0\n";
}
