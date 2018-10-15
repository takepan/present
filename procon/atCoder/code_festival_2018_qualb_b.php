<?php
// define('DEBUG', true);
define('DEBUG', false);

$answer = 0;

$a = [];
$b = [];

fscanf(STDIN, "%d %d", $N, $X);
for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d %d", $a[], $b[]);
}

foreach ($a as $k => $v) {
	$answer += $a[$k] * $b[$k];
}
$answer += max($b) * $X;

echo $answer;