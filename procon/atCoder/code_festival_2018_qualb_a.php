<?php
// define('DEBUG', true);
define('DEBUG', false);

$answer = 0;

fscanf(STDIN, "%d", $N);

for ($i = 1; $i <= 100; $i++) {
	if ($i % $N == 0) {

	} else {
		$answer++;
	}
}

echo $answer;