<?php
fscanf(STDIN, "%d %d %d", $a, $b, $c);

$p1 = abs($b - $a) + abs($c - $b);
$p2 = abs($c - $a) + abs($b - $c);
$p3 = abs($a - $b) + abs($c - $a);
$p4 = abs($c - $b) + abs($a - $c);
$p5 = abs($a - $c) + abs($b - $a);
$p6 = abs($b - $c) + abs($a - $b);

echo min($p1, $p2, $p3, $p4, $p5, $p6) . PHP_EOL;
