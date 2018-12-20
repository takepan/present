<?php
fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
$avg = array_sum($a) / count($a);
$diff = PHP_INT_MAX;

for ($i = 0; $i < $N; $i++) {
    $d = abs($a[$i] - $avg);
    if ($diff > $d) {
        $ans = $i;
        $diff = $d;
    }
}

echo $ans;
