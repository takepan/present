<?php
/*
    Problem URL : http://arc061.contest.atcoder.jp/tasks/arc061_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// fscanf(STDIN, "%d", $S);
$S = trim(fgets(STDIN));
$len = strlen($S);
$str = str_split($S);
$b = pow(2, $len-1);
for ($i = 0; $i < $b; $i++) {
	$strX = str_pad(decbin($i), $len, "0", STR_PAD_LEFT);
	// echo $strX . PHP_EOL;
	$x = str_split($strX);

	$arr = array();
	$cur = 0;
	for ($y = 0; $y < $len; $y++) {
		$arr[$cur] .= $str[$y];
		if ($x[$y+1] == '1') {
			$cur++;
		}
	}
	// var_dump($arr);
	// echo implode(" ", $arr) . PHP_EOL;
	$ans += array_sum($arr);
}

echo $ans . PHP_EOL;