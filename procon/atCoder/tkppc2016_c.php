<?php
/*
    Problem URL : http://tkppc2.contest.atcoder.jp/tasks/tkppc2016_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// N K
// H1 H2 .. HN

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $N, $K);
$H = explode(" ", trim(fgets(STDIN)));
// var_dump($H);
$iStart = 0;
$iEnd   = $N - 1;
$ans = 0;

// 仕事日の配列
$arrZ = array();

foreach ($H as $key => $val) {
    if ($val === "0") {
        $arrZ[] = $key;
    }
}
$Zlen = count($arrZ);
// var_dump($arrZ);
// echo "Zlen {$Zlen}\n";

// 有給の方が多い場合
if ($Zlen <= $K) {
    echo $N . PHP_EOL;
    exit;
}

for ($i = 0; $i < $Zlen - $K + 1; $i++) {
    // echo "LOOP\n";
    // echo $arrZ[$i] . " " . $arrZ[$i+$K-1] . PHP_EOL;

    if ($i === 0) {
        $tmpS = $iStart;
    } else {
        $tmpS = $arrZ[$i-1]+1;
    }
    if ($i === $Zlen - $K) {
        $tmpE = $iEnd;
    } else {
        $tmpE = $arrZ[$i+$K]-1;
    }
    // echo "{$tmpS}-{$tmpE}\n";
    $tmp = $tmpE - $tmpS + 1;
    $ans = max($ans, $tmp);
}

echo $ans . PHP_EOL;


