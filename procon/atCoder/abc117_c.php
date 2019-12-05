<?php
fscanf(STDIN, "%d %d", $N, $M);
$X = array_map('intval', explode(" ", trim(fgets(STDIN))));
sort($X);
$diff = [];
for ($i = 0; $i < $M - 1; $i++) {
    $diff[] = $X[$i + 1] - $X[$i];
}
sort($diff);
$ans = array_slice($diff, 0, $M - $N);
echo array_sum($ans);
