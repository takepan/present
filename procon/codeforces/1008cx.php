<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$answer = 0;

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
sort($a);
// var_dump($a);
$sort = $a;
for ($i = 0; $i < $N; $i++) {
	while ($sort) {
		$p = array_shift($sort);
		if ($p > $a[$i]) {
			$answer++;
			break;
		}
	}
}
echo $answer;