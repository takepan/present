<?php
/*
    http://agc006.contest.atcoder.jp/tasks/agc006_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
$p = explode(" ", trim(fgets(STDIN)));

$arr = array();

foreach ($p as $k => $v) {
	$arr[$v-1] = $k;
	$arr1[$k] = 0;
	$arr2[$k] = 0;
}

ksort($arr);
// var_dump($arr);


// var_dump($arr1);
// var_dump($arr2);
// exit;


for ($i = 0; $i < $N - 1; $i++) {
	if ($arr[$i] < $arr[$i+1]) {
		// echo "A";
		$arr1[$i] = abs($arr[$i] - $arr[$i+1]);
	} else {
		// echo "B";
		$arr2[$i] = abs($arr[$i] - $arr[$i+1]);
	}
}
// var_dump($arr1);
// var_dump($arr2);
$num1[0] = 1;
$num2[$N-1] = 1;

for ($i = 1; $i < $N; $i++) {
	$num1[$i] = $num1[$i-1] + $arr1[$i-1] + 1;
}

for ($i = $N-2; $i >= 0; $i--) {
	$num2[$i] = $num2[$i+1] + $arr2[$i] + 1;
}

ksort($num1);
ksort($num2);
// var_dump($num1);
// var_dump($num2);

echo implode(" ", $num1) . PHP_EOL;
echo implode(" ", $num2) . PHP_EOL;
