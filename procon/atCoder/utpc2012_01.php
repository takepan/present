<?php
/*
    Problem URL : http://utpc2012.contest.atcoder.jp/tasks/utpc2012_01

    Score  : 100
    Result : AC
    Time   : 65 ms
    Memory : 3904 KB
 */

$S = array();

fscanf(STDIN, "%s", $S);

$S = str_replace("/", "", $S);
$S1 = substr($S, 0, 4);
$S2 = substr($S, 4, 4);
$arr1 = str_split($S1);
$arr2 = str_split($S2);
sort($arr1);
sort($arr2);

if ($arr1 == $arr2) {
    echo "yes\n";
} else {
    echo "no\n";
}
