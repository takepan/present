<?php
/*
    Problem URL : http://arc003.contest.atcoder.jp/tasks/arc003_1

    Score  : 100
    Result : AC
    Time   : 57 ms
    Memory : 4112 KB
 */

$ans = 0;

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $r);

$str = str_split($r);
$arr = array();
$score = 0;

for ($i = 0; $i < $N; $i++) {
    $arr[$str[$i]]++;
}

$score += $arr['A'] * 4;
$score += $arr['B'] * 3;
$score += $arr['C'] * 2;
$score += $arr['D'] * 1;

echo $score / $N . PHP_EOL;
