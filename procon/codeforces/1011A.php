<?php
// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $n, $k);
fscanf(STDIN, "%s", $s);

$array = array();
$prev = null;
$string = "";
$bool = false;

for ($i = 0; $i < strlen($s); $i++) {
	$cd = ord($s[$i]) - 96;
	$array[$cd] = 1;
}
ksort($array);

if (DEBUG) {
	var_dump($array);
}

foreach ($array as $key => $val) {
	if (DEBUG) {
		echo $prev + 1 . "-" . $key . "\n";
	}

	if (is_null($prev) || $prev + 1 < $key) {
		$prev = $key;
		$answer += $key;
		$string .= chr($key + 96);
		if (strlen($string) === $k) {
			$bool = true;
			break;
		}
	}
	if (DEBUG) {
		echo $string . PHP_EOL;
	}

}

if ($bool === false) {
	echo "-1";
} else {
	if (DEBUG) {
		echo $string . PHP_EOL;
	}

	echo $answer;
}
