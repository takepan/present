<?php
fscanf(STDIN, "%d %d %d %d", $N, $M, $X, $Y);
$xx = explode(" ", trim(fgets(STDIN)));
$yy = explode(" ", trim(fgets(STDIN)));
$xx[] = $X;
$yy[] = $Y;

$a = max($xx);
$b = min($yy);

if ($a < $b) {
    echo "No War";
} else {
    echo "War";
}