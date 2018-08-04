<?php
/*
    http://agc007.contest.atcoder.jp/tasks/agc007_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $H, $W);

for ($i = 0; $i < $H; $i++) {
	fscanf(STDIN, "%s", $A);
	$arr2[] = str_split($A);
}

$cnt = 0;

for ($x = 0; $x < $W; $x++) {
	for ($y = 0; $y < $H; $y++) {
		if ($arr2[$y][$x] == "#") $cnt++;
		$arr[$x][$y] = $arr2[$y][$x];
	}
}
/*
for ($y = 0; $y < $H; $y++) {
	for ($x = 0; $x < $W; $x++) {
		echo "{$arr[$x][$y]}";
	}
	echo "\n";
}
*/

$x = $y = 0;
$cnt--;

while (true) {
	if ($x == $W - 1 && $y == $H - 1) {
		// echo $cnt;
		if ($cnt == 0) {
			echo "Possible\n";
		} else {
			echo "Impossible\n";
		}
		exit;
	}
	$dirY = ($arr[$x][$y + 1] == "#");
	$dirX = ($arr[$x + 1][$y] == "#");
	// echo "x:{$x} y:{$y} XX:{$dirX} YY:{$dirY}\n";


	if ($dirY + $dirX == 1) {
		$arr[$x][$y] = $cnt--;
		if ($dirY === true) {
			$y++;
		}
		if ($dirX === true) {
			$x++;
		}

	} else {
		echo "Impossible\n";
		exit;
	}
}
