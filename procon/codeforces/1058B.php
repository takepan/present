<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $n, $d);
fscanf(STDIN, "%d", $m);

for ($i = 0; $i < $m; $i++) {
    fscanf(STDIN, "%d %d", $x, $y);
    // x+y が dより大きい 2n-dより小さい
    $con1 = ($x + $y) >= $d;
    $con2 = ($x + $y) <= 2 * $n - $d;
    $con3 = ($x - $y) >= -$d;
    $con4 = ($x - $y) <= $d;
    // printf("%d %d %d %d\n", $con1, $con2, $con3, $con4);
    echo ($con1 && $con2 && $con3 && $con4) ? "YES\n" : "NO\n";
}
