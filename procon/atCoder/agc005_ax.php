<?php
/*
    http://agc005.contest.atcoder.jp/tasks/agc005_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%s", $X);
//echo $X . PHP_EOL;

$str1 = str_repeat("S", 1) . str_repeat("T", 1);
$str2 = str_repeat("S", 10) . str_repeat("T", 10);
$str3 = str_repeat("S", 100) . str_repeat("T", 100);
$str4 = str_repeat("S", 1000) . str_repeat("T", 1000);
$str5 = str_repeat("S", 10000) . str_repeat("T", 10000);
$str6 = str_repeat("S", 100000) . str_repeat("T", 100000);

while (preg_match("/ST/", $X)) {
	$X = str_replace($str6, "", $X);
	$X = str_replace($str5, "", $X);
	$X = str_replace($str4, "", $X);
	$X = str_replace($str3, "", $X);
	$X = str_replace($str2, "", $X);
	$X = str_replace($str1, "", $X);
}

echo strlen($X) . PHP_EOL;
