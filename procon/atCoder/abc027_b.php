<?php
/*
    Problem URL : http://abc027.contest.atcoder.jp/tasks/abc027_b

    Score  : 100
    Result : AC
    Time   : 52 ms
    Memory : 4504 KB
 */

fscanf(STDIN, "%d", $N);
$arr = explode(" ", trim(fgets(STDIN)));
$sum = array_sum($arr);

// 一時的に値を保存する
$tmp = 0;
// 部分的な合計が0になるまでのカウント
$cnt = 0;
// 答え
$ans = 0;

if ($sum % $N != 0) {
    echo "-1\n";
} else {
    $avg = $sum / $N;
    for ($i = 0; $i < $N; $i++) {
        $cnt++;
        $tmp += $arr[$i] - $avg;
        if ($tmp == 0) {
            $ans += $cnt - 1;
            $cnt = 0;
        }
    }
    echo $ans . PHP_EOL;
}
