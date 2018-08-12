<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);
fscanf(STDIN, "%d %d", $N, $M);
$array = array();
for ($i = 0; $i < $M; $i++) {
	fscanf(STDIN, "%d %d", $a, $b);
	if (!isset($array[$a])) {
		$array[$a] = $b;
	} else {
		$array[$a] = min($array[$a], $b);
	}
}

ksort($array);
// var_dump($array);

$answer = 0;
$cursor = 1;
foreach ($array as $key => $val) {
	// echo "{$cursor} < {$val} {$answer}\n";
	if ($key < $cursor) {
		$cursor = min($cursor, $val);
		continue;
	}
	if ($cursor < $val) {
		$answer++;
		$cursor = $val;
	}
}

echo $answer . PHP_EOL;
