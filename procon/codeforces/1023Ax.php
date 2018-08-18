<?php
// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $n, $m);
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $t);

if ($n === $m) {
	if ($s === $t) {
		echo "YES";
	} else {
		echo "NO";
	}
} elseif ($n - 1 === $m) {
	if (str_replace("*", "", $s) === $t) {
		echo "YES";
	} else {
		echo "NO";
	}
} elseif ($n < $m) {
	$diff = $m - $n;
	$pos = strpos($s, "*");
	$tt = substr($t, 0, $pos) . "*" . substr($t, -(strlen($s) - $pos) + 1, strlen($s) - $pos - 1);
	if (DEBUG) {
		echo "\$tt = {$tt}\n";
	}

	if ($s === $tt) {
		echo "YES";
	} else {
		echo "NO";
	}
} else {
	echo "NNO";
}
