<?php
// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
// fscanf(STDIN, "%d %d", $N, $K);
// $a = explode(" ", trim(fgets(STDIN)));

$rest = $N % 28;
$bool = false;
for ($i = 0; $i <= $rest; $i += 4) {
	if (($rest - $i) % 7 === 0) {
		$bool = true;
	}
	if (DEBUG) {
		echo "{$i} {$bool}\n";
	}

}
echo $bool ? "Yes" : "No";