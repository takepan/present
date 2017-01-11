<?php
/*
    http://code-festival-2016-quala.contest.atcoder.jp/tasks/codefestival_2016_qualA_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));

$ans = 0;

for ($i = 0; $i < $N; $i++) {
	$suki = $a[$i] - 1;
	$aite = $a[$suki] - 1;
	// echo "{$i} {$suki} {$aite}\n";
	if ($aite === $i) { 
		$ans++;
		$a[$suki] = "X";
	}
}

echo $ans . PHP_EOL;