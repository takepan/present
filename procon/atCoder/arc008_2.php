<?php
/*
    Problem URL : http://arc008.contest.atcoder.jp/tasks/arc008_2

    Score  : 100
    Result : AC
    Time   : 55 ms
    Memory : 3740 KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $N, $M);
fscanf(STDIN, "%s", $name);
fscanf(STDIN, "%s", $kit);

$ans = 0;

$arrName = array();
$arrKit  = array();

for ($i = 0; $i < $N; $i++) {
    $arrName[$name[$i]]++;
}

for ($i = 0; $i < $M; $i++) {
    $arrKit[$kit[$i]]++;
}

foreach ($arrName as $moji => $kazu) {
    if (!isset($arrKit[$moji])) {
        $ans = -1;
        break;
    }
    $kitNum = ceil($arrName[$moji] / $arrKit[$moji]);
    $ans = max($ans, $kitNum);
}

echo $ans . PHP_EOL;
