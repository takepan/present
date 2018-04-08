<?php

// define('DEBUG', true);
define('DEBUG', false);

$TT = 0;
$AA = 0;

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $T, $A);
    if (DEBUG) printf ("T:%d A:%d\n", $T, $A);
    if ($TT <= $T && $AA <= $A) {
        $TT = $T;
        $AA = $A;
    } else {
        $ratioT = $TT / $T;
        $ratioA = $AA / $A;
        $mmax = max($ratioT, $ratioA);
        if ($mmax == (int)$mmax) {
            $mmax = (int)$mmax;
        } else {
            $mmax = (int)($mmax + 1);
        }
        $ratio = $mmax;
        $TT = $T * $ratio;
        $AA = $A * $ratio;
    }
    if (DEBUG) printf("=> TT:%d AA:%d\n", $TT, $AA);
}
printf("%d\n", $TT + $AA);
