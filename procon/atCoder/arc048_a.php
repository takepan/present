<?php
    /*
        Problem URL : http://arc048.contest.atcoder.jp/tasks/arc048_a

        Score  : 100
        Result : AC
        Time   : 65 ms
        Memory : 4500 KB
     */

	$fp = fopen("php://stdin", "r+");
	list($A, $B) = explode(" ", trim(fgets($fp)));

	if ($A * $B > 0) {
		echo ($B - $A) . PHP_EOL;
	} else {
		echo ($B - $A - 1) . PHP_EOL;
	}