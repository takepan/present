<?php
// define('DEBUG', true);
define('DEBUG', false);
ini_set("pcre.backtrack_limit", 1000000);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $n, $m);
fscanf(STDIN, "%s", $s);
fscanf(STDIN, "%s", $t);

$s = str_replace("*", ".*", $s);

if (preg_match("/$s/", $t)) {
	echo "YES";
} else {
	echo "NO";
}
