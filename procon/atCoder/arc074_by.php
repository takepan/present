<?php
/*
    Problem URL : http://arc074.contest.atcoder.jp/tasks/arc074_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
$b = array_reverse($a);

$ans = -PHP_INT_MAX;

$x = array_slice($a, 0, $N);
$y = array_slice($b, 0, $N);

rsort($x);
sort($y);

for ($i = $N; $i <= $N * 2; $i++) {

    $sumX[$i] = array_sum($x);
    $sumY[$i] = array_sum($y);

    // echo "SUM:\n";
    // echo $sumX[$i] . PHP_EOL;
    // echo $sumY[$i] . PHP_EOL;
    // echo PHP_EOL;

    // echo "***{$i}\n";
    array_unshift($x, $a[$i]);
    array_unshift($y, $b[$i]);

    rsort($x);
    // var_dump($x);
    sort($y);

    array_pop($x);
    // var_dump($x);
    array_pop($y);

    // echo count($x) . PHP_EOL;
    // echo count($y) . PHP_EOL;
}
// var_dump($sumX);
// var_dump($sumY);
for ($i = $N; $i <= $N * 2; $i++) {

    $tmp = $sumX[$i] - $sumY[$N * 3 - $i];
    // echo "{$i} " . $tmp . PHP_EOL;
    $ans = max($ans, $tmp);
}

echo $ans . PHP_EOL;

