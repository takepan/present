<?php
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $A);
fscanf(STDIN, "%s", $S);
// fscanf(STDIN, "%d %d", $N, $K);
// $a = explode(" ", trim(fgets(STDIN)));

$boolEmpty = false;

if ($A === 0) {
	$boolEmpty = true;
}

$len = strlen($S);
$arr = str_split($S);

for ($i = 0; $i < $len; $i++) {
	if ($arr[$i] === '+') {
		$A++;
	}
	if ($arr[$i] === '-') {
		$A--;
	}
	if (DEBUG) {
		echo $A . PHP_EOL;
	}

	if ($A === 0) {
		$boolEmpty = true;
	}
}

echo $boolEmpty ? "Yes" : "No";
