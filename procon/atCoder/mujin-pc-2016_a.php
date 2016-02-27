<?php
    /*
        Problem URL : http://mujin-pc-2016.contest.atcoder.jp/tasks/mujin_pc_2016_a

        Result : AC
        Time   : 53 ms
        Memory : 4564 KB
     */

	$fp = fopen("php://stdin", "r+");
	$c = trim(fgets($fp));

	$arrRight = array("K", "O", "L", "P");

	if (in_array($c, $arrRight)) {
		echo "Right\n";
	} else {
		echo "Left\n";
	}
