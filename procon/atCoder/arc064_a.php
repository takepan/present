<?php
/*
    Problem URL : http://arc064.contest.atcoder.jp/tasks/arc064_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $x);
$a = explode(" ", trim(fgets(STDIN)));

$ans = 0;
for ($i = 0; $i < $N-1; $i++) {
    $b[$i] = $a[$i] + $a[$i+1];
}
if (DEBUG) echo implode(" ", $b) . PHP_EOL;

for ($i = 0; $i < $N; $i++) {
    if ($b[$i] > $x) {
        $ov = $b[$i] - $x;
        $ov = min($ov, $a[$i+1]);
        $a[$i+1] -= $ov;
        $b[$i] = $a[$i]+$a[$i+1];
        $b[$i+1] = $a[$i+1]+$a[$i+2];
        $ans += $ov;

        // if (DEBUG) {
        //     echo "\n";
        //     echo "ans: " . $ans . PHP_EOL;
        //     echo "a: " . implode(" ", $a) . PHP_EOL;
        //     echo "b: " . implode(" ", $b) . PHP_EOL;
        // }

    }
}

if ($a[0] > $x) {
    $ans += $a[0] - $x;
}

echo $ans . PHP_EOL;