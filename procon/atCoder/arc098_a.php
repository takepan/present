<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $S);

$array = str_split($S);
$count = count($array);
$sumL = $sumR = array();

for ($i = 0; $i < $N; $i++) {
	if ($i == 0) {
		$sumL[$i] = 0;
		$sumR[$N - $i - 1] = 0;
	} else {
		if ($array[$i - 1] == "W") {
			$sumL[$i] = $sumL[$i - 1] + 1;
		} else {
			$sumL[$i] = $sumL[$i - 1];
		}
		if ($array[$N - $i] == "E") {
			$sumR[$N - $i - 1] = $sumR[$N - $i] + 1;
		} else {
			$sumR[$N - $i - 1] = $sumR[$N - $i];
		}
	}
}

/* 検証セクション
for ($i = 0; $i < $N; $i++) {
echo $sumL[$i];
}
echo PHP_EOL;
for ($i = 0; $i < $N; $i++) {
echo $sumR[$i];
}
echo PHP_EOL;
 */

$answer = PHP_INT_MAX;

for ($i = 0; $i < $N; $i++) {
	$answer = min($answer, $sumR[$i] + $sumL[$i]);
}

echo $answer;
