<?php
/*
    http://cf16-final-open.contest.atcoder.jp/tasks/cf16-final-open_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $H, $W);
for ($i = 0; $i < $H; $i++) {
	$S = explode(" ", trim(fgets(STDIN)));
	// var_dump($S);
	$loc = array_search("snuke", $S);
	// var_dump($loc);
	if ($loc !== false) {
		echo chr(ord('A') + $loc);
		echo $i + 1;
		echo PHP_EOL;
		exit;
	}
}
