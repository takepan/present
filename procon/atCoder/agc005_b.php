<?php
/*
    http://agc005.contest.atcoder.jp/tasks/agc005_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('memory_limit', -1);

// define('DEBUG', true);
define('DEBUG', false);

// test
$N = 10;
$a = array(3, 9, 7, 1, 10, 8, 5, 2, 4, 6);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$ans = 0;
$cnt = 0;
$NN = $N;
$aa = $a;
$address = array();
while($aa) {
	$sorted = array_flip($aa);
	$address[$NN] = $sorted[$NN];
	array_splice($aa, $sorted[$NN], 1);
	$NN--;
}
if (DEBUG) var_dump($address);

$mem = array(0, $N+1);
$sorted = array_flip($a);
ksort($sorted);
foreach ($sorted as $key => $val) {
	$pos = $address[$key];
	$l = $mem[$pos];
	$r = $mem[$pos+1];
	if (DEBUG) echo "key:{$key} val:{$val} cnt:{$cnt} l:{$l} r:{$r}\n";
	array_splice($mem, $pos+1, 0, $val+1);
	$left = $val - $l + 1;
	$right = $r - $val - 1;
	if (DEBUG) echo "{$left} {$right}\n";
	$ans += $left * $right * $key;
	if (DEBUG) echo "ans = " . $ans . PHP_EOL;
	if (DEBUG) echo "mem: " . implode(" ", $mem) . PHP_EOL;
}

echo $ans . PHP_EOL;
