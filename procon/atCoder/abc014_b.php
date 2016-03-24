<?php
    /*
        Problem URL : http://abc014.contest.atcoder.jp/tasks/abc014_2

        Score  : 100
        Result : AC
        Time   : 50 ms
        Memory : 3820 KB
     */

	$fp = fopen("php://stdin", "r+");
	list($n, $X) = explode(" ", trim(fgets($fp)));
	$a = explode(" ", trim(fgets($fp)));

	$strX = decbin($X);
	$lenX = strlen($strX);
	// echo "{$strX}\n";

	$ans = 0;

	for ($i = 0; $i < $lenX; $i++) {
		$str = substr($strX, $i, 1);
		// echo "X" . $str . "X" . $a[$lenX - $i - 1] . PHP_EOL;
		if ($str == '1') $ans += $a[$lenX - $i - 1];
	}

	echo $ans . PHP_EOL;
