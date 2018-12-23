<?php

$n = 5;
$m = 5;
$d = 0;

$cnt = 0;
$score = 0;

for ($a1 = 1; $a1 <= $n; $a1++) {
for ($a2 = 1; $a2 <= $n; $a2++) {
for ($a3 = 1; $a3 <= $n; $a3++) {
for ($a4 = 1; $a4 <= $n; $a4++) {
for ($a5 = 1; $a5 <= $n; $a5++) {
    $score += abs($a1 - $a2) === $d;
    $score += abs($a2 - $a3) === $d;
    $score += abs($a3 - $a4) === $d;
    $score += abs($a4 - $a5) === $d;
    $cnt++;
}
}
}
}
}
echo $score . "\n";
echo $score / $cnt;
