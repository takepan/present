<?php
$dummy = fgets(STDIN);
$a = str_split(trim(fgets(STDIN)));
$s = [];
foreach ($a as $v) {
	if (!isset($s[$v])) {
		$s[$v] = 1;
	} else {
		$s[$v]++;
	}
}

$ans = 1;
foreach ($s as $v) {
	$ans *= ($v + 1);
	$ans %= pow(10, 9) + 7;
}

echo $ans - 1;
