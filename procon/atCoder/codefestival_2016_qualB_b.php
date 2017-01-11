<?php
/*
    http://code-festival-2016-qualb.contest.atcoder.jp/tasks/codefestival_2016_qualB_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $N, $A, $B);
fscanf(STDIN, "%s", $S);
$arrS = str_split($S);
$kakutei = 0;
$countB = 0;

for ($i = 0; $i < $N; $i++) {
	switch ($arrS[$i]) {
		case "a":
			if ($kakutei < $A + $B) {
				echo "Yes" . PHP_EOL;
				$kakutei++;
			} else {
				echo "No" . PHP_EOL;
			}
			break;

		case "b":
			if (
				($kakutei < $A + $B) && 
				($countB < $B)
			) {
				echo "Yes" . PHP_EOL;
				$kakutei++;
			} else {
				echo "No" . PHP_EOL;
			}
			$countB++;
			break;

		case "c":
			echo "No" . PHP_EOL;
			break;
	}
}
