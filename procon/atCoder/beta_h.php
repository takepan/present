<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$A = explode(" ", trim(fgets(STDIN)));

// var_dump(getJ(array(3,5,11,22), 9));
// exit;

$L[0] = $A[0];
$length = 1;
for ($i = 1; $i <= $N - 1; $i++) {
    if ($L[$length-1] < $A[$i]) {
        $L[$length++] = $A[$i];
    } else {
        $j = getJ($L, $A[$i]);
        if (DEBUG) echo "j=" . $j . PHP_EOL;
        $L[$j] = $A[$i];
    }
    if (DEBUG) echo implode(" ", $L) . PHP_EOL;
}
echo count($L) . PHP_EOL;

function getJ($arr, $num) {
    $N = count($arr);
    if ($arr[$N-1] < $num) return false;
    $arrBool = array("-1" => false, $N => true);
    $l = -1;
    $r = $N;
    $arr[-1] = -PHP_INT_MAX;
    $arr[$N] = PHP_INT_MAX;

    while (true) {
        $m = ceil(($l + $r)/2);
        if ($l == $m || $m == $r) {
            return $m;
        }
        if (DEBUG) echo "l:{$l} m:{$m} r:{$r}\n";
        if ($arr[$m] > $num) {
            // true
            $arrBool[$m] = true;
            if ($arrBool[$m - 1] === false) {
                return $m;
            } else {
                $r = $m;
            }
        } else {
            $arrBool = false;
            $l = $m;
        }
    }
}
