<?php
fscanf(STDIN, "%d %d", $N, $M);
$c = explode(" ", trim(fgets(STDIN)));
$a = explode(" ", trim(fgets(STDIN)));

$ans = 0;
$cursorC = 0;
$cursorA = 0;

while ($cursorC < $N && $cursorA < $M) {
	if ($c[$cursorC] <= $a[$cursorA]) {
		$ans++;
		$cursorC++;
		$cursorA++;
	} else {
		$cursorC++;
	}
}
echo $ans;
