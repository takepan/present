<?php
/*
    Problem URL : http://agc003.contest.atcoder.jp/tasks/agc003_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$a = array();
$c = array();
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d", $a[$i]);
}
$b = $a;

// 座標圧縮
sort($b);
$b = array_flip($b);

$ans = 0;
for ($i = 0; $i < $N; $i++) {
	$c[$i] = $b[$a[$i]];
	$x = $i % 2;
	$y = $b[$a[$i]] % 2;
	if ($x === $y) {

	} else {
		$ans++;
	}
}

echo ($ans / 2) . PHP_EOL;
