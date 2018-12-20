<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

// 1 -1 -1
// 2  2  1
// 3 -3 -2
// 4  4  2
// 5 -5 -3


function calc($x) {
    if ($x % 2 == 0) {
        return $x / 2;
    } else {
        return -($x + 1) / 2;
    }
}


fscanf(STDIN, "%d", $q);
for ($i = 0; $i < $q; $i++) {
    fscanf(STDIN, "%d %d", $l, $r);
    printf("%d\n", calc($r) - calc($l - 1));
}
