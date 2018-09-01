<?php
/*
検証部
for ($i = 1; $i < 100000; $i++) {
$str = strval($i);
$array = str_split($str);
$sum = array_sum($array);
if ($sum > $max) {
printf("%d %d\n", $sum, $i);
$max = $sum;
}
}
 */

for ($i = 0; $i <= 16; $i++) {
	for ($j = 1; $j < 10; $j++) {
		$str = $j . str_repeat("9", $i);
		$num = $j + $i * 9;
		$array[$num] = intval($str);
	}
}

krsort($array);
// var_dump($array);

fscanf(STDIN, "%d", $N);

foreach ($array as $key => $val) {
	if ($N >= $val) {
		$answer = $key;
		break;
	}
}

echo $answer;
