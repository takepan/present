<?php
/*
    Problem URL : http://agc004.contest.atcoder.jp/tasks/agc004_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $N, $x);
$a = explode(" ", trim(fgets(STDIN)));
$arr = array();

// 最小値を一番左に持ってくる
$amin = min($a);
$locmin = array_search($amin, $a);

echo $locmin;
for ($i = $locmin; $i < $N; $i++) {
	$arr[] = $a[$i];
}
for ($i = 0; $i < $locmin; $i++) {
	$arr[] = $a[$i];
}
var_dump($arr);
exit;

$cur = 0;
$arr2 = array();

for ($i = 1; $i < $N; $i++) {
	if ($arr[$cur] + $x < $arr[$i]) {
		$arr2[$i] = $cur;
	}

}
exit;

if ($a % 2 == 0 ||  $b % 2 == 0 || $c % 2 == 0) {
	echo "0\n";
} else {
	$ans = min($a * $b, $a * $c, $b * $c);
	echo $ans . "\n";
}
