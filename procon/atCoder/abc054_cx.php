<?php
/*
    Problem URL : http://abc054.contest.atcoder.jp/tasks/abc054_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$v = array();
$ans = 0;

fscanf(STDIN, "%d %d", $N, $M);
for ($i = 0; $i < $N; $i++) {
    for ($j = $i + 1; $j < $N; $j++) {
        $v[$i][$j] = 0;
        $v[$j][$i] = 0;
    }
}
// var_dump($v);
// exit;
for ($i = 0; $i < $M; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $v[$a-1][$b-1] = 1;
    $v[$b-1][$a-1] = 1;
}
// var_dump($v);
// exit;


$from = $to = "0";
for ($i = 0; $i < $N-1; $i++) {
    $from .= $i + 1;
    $to .= $N - $i - 1; 
}
echo "{$from}\n";
echo "{$to}\n";
$from = decoct($from);
$to = decoct($to);
for ($i = $from; $i <= $to; $i++) {

    $arr = str_split(decoct($i));

    $tmparr = array();
    for ($x = 0; $x <= $N; $x++) {
        $tmparr[$arr[$x]]++;
    }
    if (max($tmparr) != 1) continue;

    echo "X:" . decoct($i) . PHP_EOL;

    $bool = true;
    for ($j = 0; $j < $N-1; $j++) {
        if ($arr[$j] == "0" || $arr[$j+1] == "0") {
            $bool = false;
            continue;
        }
        if ($arr[$j] > $N) continue;
        if ($arr[$j+1] > $N) continue;
        if ( !isset($v[$arr[$j]][$arr[$j+1]]) || !isset($v[$arr[$j+1]][$arr[$j]]) ) {
            $bool = false;
            continue;
        } else {
            echo "{$arr[$j]}-{$arr[$j+1]} ";
            if ( $v[$arr[$j]][$arr[$j+1]] === 1 || $v[$arr[$j+1]][$arr[$j]] === 1 ) {

            } else {
                $bool = false;
            }
        }
    }
    echo PHP_EOL;
    if ($bool) $ans++;
}

echo $ans . PHP_EOL;