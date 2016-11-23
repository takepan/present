<?php
/*
    http://agc006.contest.atcoder.jp/tasks/agc006_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $t);

for ($i = $N; $i >= 0; $i--) {
	$ss = substr($s, strlen($s) - $i);
	$tt = substr($t, 0, $i);
	// echo "{$ss} {$tt}\n";
	if ($ss == $tt) {
		echo ($N * 2 - $i) . PHP_EOL;
		exit;
	}
}
