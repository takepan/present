<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$answer = 0;

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
sort($a);
// var_dump($a);
$sort = $a;
$cur1 = 0;
$cur2 = 0;
while ($cur2 < $N) {
	if ($a[$cur1] < $a[$cur2]) {
		$answer++;
		$cur1++;
		$cur2++;
	} else {
		$cur2++;
	}
}
echo $answer;