<?php
/*
    Problem URL : http://wupc2012.contest.atcoder.jp/tasks/wupc2012_1

    Score  : 100
    Result : AC
    Time   : 54 ms
    Memory : 3776 KB
 */

$ans = 0;

fscanf(STDIN, "%d %d", $Ma, $Da);
fscanf(STDIN, "%d %d", $Mb, $Db);

$arrDays = array(0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

for ($i = $Ma; $i <= $Mb; $i++) {
    if  ($Ma == $Mb) {
        $ans += $Db - $Da;
        // echo "A {$ans}\n";
    } elseif ($i == $Ma) {
        $ans += $arrDays[$i] - $Da + 1;
        // echo "B {$ans}\n";
    } elseif ($i == $Mb) {
        $ans += $Db - 1;
        // echo "C {$ans}\n";
    } else {
        $ans += $arrDays[$i];
        // echo "D {$ans}\n";
    }
}

echo $ans . PHP_EOL;
