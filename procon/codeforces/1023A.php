<?php
// define('DEBUG', true);
define('DEBUG', false);
// ini_set("pcre.backtrack_limit", 1000000);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $n, $m);
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $t);

$pos = strpos($s, '*');
if ($pos === false) {
	if ($s === $t) {
		echo "YES";
	} else {
		echo "NO";
	}
} elseif ($n - 1 > $m) {
	echo "NO";
} else {
	$s1 = substr($s, 0, $pos);
	$s2 = substr($s, $pos + 1);
	if (DEBUG) {
		echo "s1: " . $s1 . PHP_EOL;
	}

	if (DEBUG) {
		echo "s2: " . $s2 . PHP_EOL;
	}

	$t1 = substr($t, 0, strlen($s1));
	if (strlen($s2) === 0) {
		$t2 = "";
	} else {
		$t2 = substr($t, -strlen($s2));
	}
	if (DEBUG) {
		echo "t1: " . $t1 . PHP_EOL;
	}

	if (DEBUG) {
		echo "t2: " . $t2 . PHP_EOL;
	}

	if ($s1 === $t1 && $s2 === $t2) {
		echo "YES";
	} else {
		echo "NO";
	}
}
