<?php
fscanf(STDIN, "%d %d", $N, $K);

$answer = 0;
if ($K % 2 === 0) {
	$base = $K / 2;
	$answer += pow(floor(($N - $base) / $K) + 1, 3);
}
$answer += pow(floor($N / $K), 3);
printf("%d", $answer);
