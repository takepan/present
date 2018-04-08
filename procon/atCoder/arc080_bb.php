<?php

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $H, $W);
if (DEBUG) echo "{$H} {$W}\n";
fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
if (DEBUG) var_dump($a);

$m = array(array());

$X = $Y = 0;
$xx = 1;

foreach ($a as $k => $v) {
    for ($i = 0; $i < $v; $i++) {
        if (DEBUG) echo "k:{$k} i:{$i}\n";
        $m[$Y][$X] = $k + 1;
        $X += $xx;
        if ($X >= $W || $X < 0) {
            if ($X < 0) $X = 0;
            if ($X >= $W) $X = $W - 1;
            $Y++;
            $xx = -$xx;
        }
        if (DEBUG) echo "X:{$X} Y:{$Y} k:{$k}\n";
    }
}

for ($i = 0; $i < $H; $i++) {
    ksort($m[$i]);
    echo implode(" ", $m[$i]) . PHP_EOL;
}
