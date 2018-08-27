<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d %d %d", $A, $B, $C, $X, $Y);

$maxC = max($X, $Y) * 2;

$answer = PHP_INT_MAX;

for ($CC = 0; $CC <= $maxC; $CC += 2) {
	// Cピザを2枚買うとAピザを1枚買わなくて済む
	$AA = max(0, $X - $CC / 2);
	// Cピザを2枚買うとBピザを1枚買わなくて済む
	$BB = max(0, $Y - $CC / 2);
	$cost = $AA * $A + $BB * $B + $CC * $C;

	if (DEBUG) {
		printf("A:%d B:%d C:%d\n", $AA, $BB, $CC);
	}

	$answer = min($answer, $cost);
}
echo $answer;
