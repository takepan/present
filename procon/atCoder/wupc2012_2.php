<?php
/*
    Problem URL : http://wupc2012.contest.atcoder.jp/tasks/wupc2012_2

    Score  : 100
    Result : AC
    Time   : 56 ms
    Memory : 4840 KB
 */

$S = array();

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%s", $S[$i]);
}

// var_dump($S);
sort($S);
// var_dump($S);

$arr = array();

for ($i = 0; $i < $N; $i++) {
    for ($j = 0; $j < $N; $j++) {
        if ($i === $j) continue;
        $arr[] = $S[$i] . $S[$j];
    }
}
sort($arr);

echo $arr[0] . PHP_EOL;
