<?php
/*
    Problem URL : http://abc054.contest.atcoder.jp/tasks/abc054_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);
ini_set('memory_limit', '-1');

$v = array();
$ans = 0;

fscanf(STDIN, "%d %d", $N, $M);

for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $v[$a][$b] = 1;
    $v[$b][$a] = 1;
}

// var_dump($v);
// exit;

$arr = array("1");
$base = "1";

for ($i = 0; $i < $N-1; $i++) {
    $newArr = array();
    foreach ($arr as $tmp) {
        $last = substr($tmp, strlen($tmp) - 1);
        // echo "last:{$last}\n";
        // var_dump($v[$last]);
        foreach ($v[$last] as $nex => $dummy) {
            if (!in_array($nex, str_split($tmp))) {
                $newArr[] = $tmp . $nex;
            }
        }
    }
    $arr = $newArr;
}
// var_dump($arr);

foreach ($arr as $x) {
    $arrx = str_split($x);
    $sum = array();
    for ($i = 0; $i < $N; $i++) {
        $sum[$arrx[$i]]++;
    }
    // echo max($sum) . PHP_EOL;
    if (max($sum) == 1) {
        $ans++;
    }
}
echo $ans . PHP_EOL;
