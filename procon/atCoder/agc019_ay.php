<?php

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d %d", $Q, $H, $S, $D);
fscanf(STDIN, "%d", $N);

$p1 = bcdiv(strval($N), "2");
$p2 = min(8 * $Q, 4 * $H, 2 * $S, $D);
$p3 = bcmod(strval($N), "2");
$p4 = min(4 * $Q, 2 * $H, $S);
$p12 = bcmul($p1, $p2);
$p34 = bcmul($p3, $p4);
$p1234 = bcadd($p12, $p34);
printf("%s\n", $p1234);
