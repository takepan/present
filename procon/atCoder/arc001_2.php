<?php
/*
    Problem URL : http://arc001.contest.atcoder.jp/tasks/arc001_2

    Score  : 100
    Result : AC
    Time   : 61 ms
    Memory : 3836 KB
 */

$arr = array(
    1 => 1, // 1を1回
    2 => 2, // 1を2回
    3 => 3, // 1を3回または5,-1,-1
    4 => 2, // 5,-1
    5 => 1, // 5を1回
    6 => 2, // 5,1
    7 => 3, // 5,1,1
    8 => 3, // 10,-1,-1
    9 => 2, // 10,-1
    10 => 1, // 10を1回
);

fscanf(STDIN, "%s %s", $A, $B);
$diff = abs($A - $B);
$ans = 0;

while ($diff != 0) {
    if ($diff > 10) {
        $ans += 1;
        $diff -= 10;
    } else {
        $ans += $arr[$diff];
        $diff = 0;
    }
}

echo $ans . PHP_EOL;
