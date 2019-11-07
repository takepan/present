<?php
fscanf(STDIN, "%d", $N);
$ans = 0;
for ($i = 1; $i < $N; $i++) {
    if ($N % $i === 0) {
        $ans += $i;
    }
}
echo $N === $ans ? "Yes" : "No";
