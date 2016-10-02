<?php
/*
    URL    : http://kupc2016.contest.atcoder.jp/tasks/kupc2016_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

$ans = 0;

fscanf(STDIN, "%d %d %d", $N, $A, $B);
for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d", $t);
	if ($t < $A || $t >= $B) {
		$ans++;
	} 
	// echo $t . " " . $A . " " . $B . " " . $ans . PHP_EOL;
}

echo $ans . PHP_EOL;