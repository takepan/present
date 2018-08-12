<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $n);
$a = explode(" ", trim(fgets(STDIN)));
$sum = array_sum($a);
$upper = $sum / 2;

$array1 = array();
$array2 = array();

$sum1 = $sum2 = 0;
for ($i = 0; $i < $n; $i++) {
	$sum1 += $a[$i];
	if ($upper >= $sum1) {
		$array1[$sum1] = 1;
	}
	$sum2 += $a[$n - $i - 1];
	if ($upper >= $sum2) {
		$array2[$sum2] = 1;
	}
}

/*
echo "1: ";
foreach ($array1 as $key => $dummy) {
echo $key . " ";
}
echo PHP_EOL;
echo "2: ";
foreach ($array2 as $key => $dummy) {
echo $key . " ";
}
echo PHP_EOL;
 */

krsort($array1);

foreach ($array1 as $key => $dummy) {
	if (isset($array2[$key])) {
		echo $key . PHP_EOL;
		exit;
	}
}
echo "0";
