<?php
    /*
        Problem URL : http://abc034.contest.atcoder.jp/tasks/abc034_c

        Score  : 50
        Result : MLE
        Time   : - ms
        Memory : - KB
     */

	ini_set('display_errors', 'Off');
	ini_set('error_reporting', E_ALL & ~E_NOTICE);

	$fp = fopen("php://stdin", "r+");
	list($W, $H) = explode(" ", trim(fgets($fp)));

	$a = $W + $H - 2;
	$b = $H - 1;

	$mem = array();

	define('BASIS', 1000000007);

	echo get_x($a, $b) . PHP_EOL;

	function get_x($a, $b) {
		global $mem;

		if ($a - $b < $b) $b = $a - $b;
	
		if (isset($mem[$a][$b])) {
			return $mem[$a][$b];
		} else {
			if ($b == 0 || $a == $b) {
				$mem[$a][$b] = 1;
				return 1;
			} else {
				$mem[$a][$b] = ( get_x($a-1, $b-1) + get_x($a-1, $b) ) % BASIS;
				return $mem[$a][$b];
			}
		}
	}