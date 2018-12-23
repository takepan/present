<?php
fscanf(STDIN, "%d %d", $N, $K);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $h[$i]);
}
sort($h);
$ans = PHP_INT_MAX;
for ($i = 0; $i < $N - $K + 1; $i++) {
    $ans = min($ans, $h[$i + $K - 1] - $h[$i]);
}
echo $ans;
