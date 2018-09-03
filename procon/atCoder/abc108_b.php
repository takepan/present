<?php
fscanf(STDIN, "%d %d %d %d", $x1, $y1, $x2, $y2);

$dx = $x2 - $x1;
$dy = $y2 - $y1;

$x = $x2;
$y = $y2;

$answer = [];

for ($i = 0; $i < 2; $i++) {
	$tmp_dx = -$dy;
	$tmp_dy = $dx;

	$dx = $tmp_dx;
	$dy = $tmp_dy;

	$x += $dx;
	$y += $dy;

	$answer[] = $x;
	$answer[] = $y;
}

echo implode(" ", $answer);
