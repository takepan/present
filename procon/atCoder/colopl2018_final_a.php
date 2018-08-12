<?php
/*
Problem URL : https://colopl2018-final.contest.atcoder.jp/tasks/colopl2018_final_a

Score  :
Result :
Time   :  ms
Memory :  KB
 */

$fp = fopen("php://stdin", "r+");
list($n, $X) = explode(" ", trim(fgets($fp)));
$a = explode(" ", trim(fgets($fp)));

$strX = decbin($X);
$lenX = strlen($strX);
// echo "{$strX}\n";

$ans = 0;

for ($i = 0; $i < $lenX; $i++) {
	$str = substr($strX, $i, 1);
	// echo "X" . $str . "X" . $a[$lenX - $i - 1] . PHP_EOL;
	if ($str == '1') {
		$ans += $a[$lenX - $i - 1];
	}

}

echo $ans . PHP_EOL;
