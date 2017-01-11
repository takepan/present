<?php
/*
    Problem URL : http://agc004.contest.atcoder.jp/tasks/agc004_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $a, $b, $c);

if ($a % 2 == 0 ||  $b % 2 == 0 || $c % 2 == 0) {
	echo "0\n";
} else {
	$ans = min($a * $b, $a * $c, $b * $c);
	echo $ans . "\n";
}
