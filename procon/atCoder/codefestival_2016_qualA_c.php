<?php
/*
    http://code-festival-2016-quala.contest.atcoder.jp/tasks/codefestival_2016_qualA_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// a 097
// z 122

fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%d", $K);
$arr = str_split($s);
$len = strlen($s);
$num = array();
foreach ($arr as $key => $val) {	
	// echo ord($val). PHP_EOL;
	$num[$key] = 123 - ord($val);
	if ($num[$key] == 26) $num[$key] = 0;
}
$allA = true;
for ($i = 0; $i < $len; $i++) {
	if ($num[$i] <= $K) {
		$arr[$i] = 'a';
		$K -= $num[$i];
		// echo $K . PHP_EOL;
	} else {
		$allA = false;
	}
}

if ($allA === true) {
	$K %= 26;
}
$arr[$len-1] = chr(ord($arr[$len-1]) + $K);
$K -= $K;

if (ord($arr[$len-1]) >= 123) {
	$arr[$len-1] = chr(ord($arr[$len-1]) - 26);
};

echo implode("", $arr) . PHP_EOL;
// var_dump($allA);
// echo $K;
