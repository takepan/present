<?php
/*
    Problem URL : http://arc060.contest.atcoder.jp/tasks/arc060_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

$ans = 0;

fscanf(STDIN, "%d %d", $N, $A);
$x = explode(" ", trim(fgets(STDIN)));
$b = pow(2, $N);
for ($i = 1; $i < $b; $i++) {
    $strB = str_split(str_pad(decbin($i), $N, '0', STR_PAD_LEFT));
    $tmp = 0;
    $kazu = 0;
    for ($j = 0; $j < $N; $j++) {
        $tmp += $strB[$j] * $x[$j];
        $kazu += $strB[$j];
    }

    if ($tmp / $kazu == $A) {
        $ans++;
    }
}

echo $ans . PHP_EOL;