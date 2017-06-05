<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE);

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d %d", $N, $A, $B);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $h[$i]);
}
rsort($h);
$total = array_sum($h);
$mmax = ceil($h[0] / $B);
$mmin = ceil($total / ($A + $B * ($N - 1)));
if (DEBUG) echo "mmin:{$mmin} mmax:{$mmax}\n";
$mmin--;
// exit;

$ans[$mmax] = true;
$ans[$mmin] = false;

// for ($i = $mmin; $i <= $mmax; $i++) {
//     printf("%d %s\n", $i, getEnable($i));
// }

while (true) {
    $mid = ceil(($mmin + $mmax) / 2);
    $result = getEnable($mid);
    if (DEBUG) printf("%d %d %d %s\n", $mid, $mmin, $mmax, $result);
    $ans[$mid] = $result;
    if ($result === false) {
        if ($ans[$mid+1] === true) {
            exit(($mid + 1) . "\n");
        }
        $mmin = $mid;
    } else {
        if ($ans[$mid-1] === false) {
            exit($mid . "\n");
        }
        $mmax = $mid;
    }
    foreach ($ans as $key => $val) {
        if (DEBUG) echo "RRR {$key} {$val}\n";
    }
    // sleep(1);
}

function getEnable($x) {
    global $N, $A, $B, $h;

    $xx = $x;
    $base = $B * $x;

    for ($i = 0; $i < $N; $i++) {
        if ($base >= $h[$i]) {
            return true;
        }
        $rest = $h[$i] - $base;
        $need = ceil($rest / ($A - $B));
        $x -= $need;
        if ($x < 0) {
            return false;
        }
    }

    return true;
}