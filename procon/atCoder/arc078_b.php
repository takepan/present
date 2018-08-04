<?php

// ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
// ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$v = array();
$fromS = array_fill(1, $N, -1);

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $a, $b);
    $v[$a][$b] = 1;
    $v[$b][$a] = 1;
}

$stk = array();

$w = $v;
$dist = array_fill(1, $N, PHP_INT_MAX);
solve(1);
$distS = $dist;

if (DEBUG) echo "------------------\n";

$v = $w;
$dist = array_fill(1, $N, PHP_INT_MAX);
solve($N);
$distG = $dist;

$scoreF = 0;
$scoreS = 0;
for ($i = 2; $i < $N; $i++) {
    if (DEBUG) printf("%d : %d %d\n", $i, $distS[$i], $distG[$i]);
    if ($distS[$i] < $distG[$i]) {
        $scoreF++;
    } else {
        $scoreS++;
    }
}

if (DEBUG) echo "$scoreF $scoreS\n";
if ($scoreF > $scoreS) {
    echo "Fennec\n";
} else {
    echo "Snuke\n";
}

function solve($pos = 1) {
    global $v, $stk, $N, $dist;
    // var_dump($v[$pos]);
    if (count($v[$pos]) == 0)
    {
        if (DEBUG) echo "*************\n";
        if (DEBUG) var_dump(implode("-", $stk));

        // $stk = array();



    } else {
        foreach ($v[$pos] as $key => $val) {
            if ($key == 1 || $key == $N) continue;
            if (DEBUG) echo "key:{$key}\n";
            array_push($stk, $key);
            $dist[$key] = count($stk);
            unset($v[$pos][$key]);
            unset($v[$key][$pos]);
            if (DEBUG) echo "key={$key}\n";
            solve($key);
            array_pop($stk);
        }
    }
}

