<?php
/*
Problem URL : https://apc001.contest.atcoder.jp/tasks/apc001_b

Score  :
Result :
Time   :  ms
Memory :  KB
 */

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
$b = explode(" ", trim(fgets(STDIN)));

sort($a);
sort($b);

$ans = "Yes";

foreach ($a as $k => $v) {
	if ($a[$k] >= $b[$k]) {
		$ans = "No";
	}
}

echo $ans . PHP_EOL;