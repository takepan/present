<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $n);
$a = explode(" ", trim(fgets(STDIN)));
$c1 = 0;
$c2 = $n - 1;
// var_dump($a);
$answer = 0;
while ($c1 < $c2) {
	// echo $c1 . "-" . $c2 . PHP_EOL;
	$t1 += $a[$c1];
	$t2 += $a[$c2];
	$a[$c1] = 0;
	$a[$c2] = 0;
	if ($t1 == $t2) {
		$answer = $t1;
		$c1++;
		$c2--;
	} elseif ($t1 < $t2) {
		$c1++;
	} else {
		$c2--;
	}
//     echo $answer . ":" . $t1 . " " . $t2 . PHP_EOL;
}
echo $answer;