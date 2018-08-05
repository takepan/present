<?php
$a = explode(" ", trim(fgets(STDIN)));
$max = max($a);
$sum = array_sum($a);

$tmp = $max * 3 - $sum;

if ($tmp % 2 === 0) {
	echo $tmp / 2 . PHP_EOL;
} else {
	echo ($tmp + 3) / 2 . PHP_EOL;
}
