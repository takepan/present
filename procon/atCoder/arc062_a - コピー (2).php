<?php
/*
    http://arc062.contest.atcoder.jp/tasks/arc062_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d %d", $T, $A);
	// echo "LCM {$T} {$A} {$LCM}\n";
	if ($i == 0) {
		$TT = $T;
		$AA = $A;
	} else {
		$fTT = ceil($TT / $T);
		$fAA = ceil($AA / $A);
		$ratio = max($fTT, $fAA);
		$TT = $T * $ratio;
		$AA = $A * $ratio;
	}
	// echo "Q {$TT} {$AA}\n";
}
printf("%d\n", $TT + $AA);
