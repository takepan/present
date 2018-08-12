<?php

/*
x,y のいずれかが 0 なら、終了する
x<y なら x を rev(x) で、そうでないなら y を rev(y) で置き換える。
上の操作後、x<y となっていれば y を y−x で、そうでなければ x を x−y で置き換える。
 */

// var_dump(rev(9123));
// exit;
// var_dump(solve(13, 12));

define('LIMIT', 1000);
// define('LIMIT', 100);

fscanf(STDIN, "%d %d", $xx, $yy);

$count = 0;
for ($x = 1; $x <= $xx; $x++) {
	for ($y = 1; $y <= $yy; $y++) {
		$ret = solve($x, $y);
		if ($ret === true) {
			// echo "{$x} {$y}\n";
			$answer[$x][] = $y;
			$count++;
		}
	}
}

// foreach ($answer as $key => $val) {
// 	echo "array({$key} => " . implode(",", $val) . ")," . PHP_EOL;
// }

echo $count . PHP_EOL;

function solve($x, $y) {
	$return = null;
	$mem = array();
	while (true) {
		if ($x === 0 || $y === 0) {
			return false;
		}
		if ($x < $y) {
			$x = rev($x);
		} else {
			$y = rev($y);
		}
		if ($x < $y) {
			$y = $y - $x;
		} else {
			$x = $x - $y;
		}
		$xy = "{$x},{$y}";
		if (!isset($mem[$xy])) {
			$mem[$xy] = 1;
		} else {
			return true;
		}
	}
}

function rev($num) {
	return intval(implode("", array_reverse(str_split((string) $num))));
}