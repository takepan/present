<?php
/*
    Problem URL : http://arc007.contest.atcoder.jp/tasks/arc007_2

    Score  : 100
    Result : AC
    Time   : 53 ms
    Memory : 3884 KB
 */

fscanf(STDIN, "%d %d", $N, $M);
$arr = array();
for ($i = 0; $i <= $N; $i++) {
    $arr[$i] = $i;
}

for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d", $disk);
    $x = array_search($disk, $arr);
    swap($arr[0], $arr[$x]);
    // echo implode(" ", $arr). PHP_EOL;
}

array_shift($arr);

echo implode("\n", $arr) . PHP_EOL;

function swap(&$aaa, &$bbb)
{
    $tmp = $aaa;
    $aaa = $bbb;
    $bbb = $tmp;
}
