<?php
/*
    URL    : http://agc005.contest.atcoder.jp/tasks/agc005_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%s", $X);
$lenX = strlen($X);
// echo $X . PHP_EOL;
$W = "";

$cnt = 0;

for ($i = 0; $i < $lenX; $i++) {
	$cnt++;
	if ($X[0] === "T" && $W[strlen($W)-1] === "S") {
		$W = substr($W, 0, strlen($W) - 1);
	} else {
		$W .= $X[0];
	}
	$X = substr($X, 1);
	// echo "{$W} {$X}\n";
}

// echo $W . PHP_EOL;
echo strlen($W) . PHP_EOL;
echo $cnt . PHP_EOL;