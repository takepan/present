<?php
// define('DEBUG', true);
define('DEBUG', false);

$array = array(array(array()));
$answer = 1;

fscanf(STDIN, "%d %d %d", $X, $Y, $Z);

while (true) {
	$newX = $Y - $Z;
	$newY = $Z - $X;
	$newZ = $X - $Y;
	if (DEBUG) {
		printf("%d %d %d %d\n", $newX, $newY, $newZ, $newX + $newY + $newZ);
	}

	$answer++;

	if ($newX == 0 || $newY == 0 || $newZ == 0) {
		echo $answer . PHP_EOL;
		break;
	}
	if (isset($array[$newX][$newY][$newZ])) {
		echo "-1" . PHP_EOL;
		break;
	}
	$array[$newX][$newY][$newZ] = 1;

	$X = $newX;
	$Y = $newY;
	$Z = $newZ;
}
