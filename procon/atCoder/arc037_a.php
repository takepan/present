<?php
    /*
        Problem URL : http://arc037.contest.atcoder.jp/tasks/arc037_a

        Score  : 100
        Result : AC
        Time   : 51 ms
        Memory : 4496 KB
     */

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    $m = explode(" ", trim(fgets($fp)));
    $ans = 0;

    for ($i = 0; $i < $N; $i++) {
    	if ($m[$i] < 80) {
    		$ans += 80 - $m[$i];
    	}
    }

    echo $ans . PHP_EOL;
