<?php
    /*
        Problem URL : http://arc031.contest.atcoder.jp/tasks/arc031_1

        Score  : 100
        Result : AC
        Time   : 58 ms
        Memory : 3792 KB
     */

	$fp = fopen("php://stdin", "r+");
	$N = trim(fgets($fp));
	$lenN = strlen($N);

	for ($i = 0; $i < ceil($lenN / 2); $i++) {
		if ($N[$i] != $N[$lenN - $i]) {
			echo "NO\n";
			exit;
		}
	}
	echo "YES\n";
