<?php
define('DEBUG', true);
// define('DEBUG', false);

$t = 117231566641875000;
$t2 = ceil($t);
printf("%d\n", $t);
printf("%d\n", $t2);
printf("%d\n", $t2 - $t);
exit;

printf("%s\n", gettype($t));
printf("%d\n", ceil($t));
exit;

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
        $ratioT = (int) $TT / $T;
        $ratioA = (int) $AA / $A;
        printf("ratioT %d %d\n", $ratioT, $ratioA);
        printf("ratioT %s %s\n", gettype($ratioT), gettype($ratioA));
        $mmax = max($ratioT, $ratioA);
        printf("mmax: %d\n", $mmax);
        printf("mmax: %s\n", gettype($mmax));
        $ratio = (int) (ceil($mmax));
        printf("ratio %d\n", $ratio);
        $TT = intval($T * $ratio);
        $AA = intval($A * $ratio);
    }
    if (DEBUG) printf("=> TT:%d AA:%d\n", $TT, $AA);
}
printf("%d\n", $TT + $AA);
