<?php
/*
    Problem URL : http://arc008.contest.atcoder.jp/tasks/arc008_1

    Score  : 100
    Result : AC
    Time   : 55 ms
    Memory : 3812 KB
 */


fscanf(STDIN, "%d", $N);

$ans = 0;

/*
// 6.66…個以上買うなら、10個セットを買った方が得なので
$set = floor($N / (100 / 15));
// セット分のお金
$ans += $set * 100;
// 必要な数からセット数×10を引く
$N -= $set * 10;

// 足りなかったら1個15円のを買い足す
if ($N > 0) {
    $ans += $N * 15;
}
*/

// 上記は間違い……
if ($N % 10 < (100 / 15)) {
    $ans = floor($N / 10) * 100 + ($N % 10) * 15;
} else {
    $ans = ceil($N / 10) * 100;
}

echo $ans . PHP_EOL;
