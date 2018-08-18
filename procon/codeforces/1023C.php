<?php
// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $n, $k);
fscanf(STDIN, "%s", $s);

$shorten = ($n - $k) / 2;

while ($shorten > 0) {
	if (DEBUG) {
		echo $shorten . PHP_EOL;
	}

	$pos = strpos($s, "(())");
	$s = substr($s, 0, $pos) . "()" . substr($s, $pos + 4);
	$shorten--;
}

echo $s;
