<?php
    /*
        Problem URL : http://arc025.contest.atcoder.jp/tasks/arc025_1

        Score  : 100
        Result : AC
        Time   : 49 ms
        Memory : 3724 KB
     */

    $ans = 0;
	$D = trim(fgets(STDIN));
	$J = trim(fgets(STDIN));
	$arrD = explode(" ", $D);
	$arrJ = explode(" ", $J);
	for ($i = 0; $i < 7; $i++) {
		$ans += max($arrD[$i], $arrJ[$i]);
	}
	echo $ans . PHP_EOL;
