<?php
/*
    http://agc005.contest.atcoder.jp/tasks/agc005_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%s", $S);
$arrS = str_split($S);
$A = "CODEFESTIVAL2016";
$arrA = str_split($A);
$ans = 0;

for ($i = 0; $i < count($arrS); $i++) {
	if ($arrS[$i] != $arrA[$i]) $ans++;
}
echo $ans . PHP_EOL;