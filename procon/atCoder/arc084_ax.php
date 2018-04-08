<?php
fscanf(STDIN, "%d", $N);
$A = explode(" ", trim(fgets(STDIN)));
$B = explode(" ", trim(fgets(STDIN)));
$C = explode(" ", trim(fgets(STDIN)));

$sumA = array();
$sumB = array();
$sumC = array();

foreach ($A as $v) {
    $sumA[$v]++;
}
foreach ($B as $v) {
    $sumB[$v]++;
}
foreach ($C as $v) {
    $sumC[$v]++;
}

// var_dump($sumA);
// var_dump($sumB);
// var_dump($sumC);

krsort($sumA);
krsort($sumB);
krsort($sumC);

// var_dump($sumA);
// var_dump($sumB);
// var_dump($sumC);
// exit;

$tmp = 0;
foreach ($sumA as $k => $v) {
    $tmp += $v;
    $sumA[$k] = $tmp;
}
$tmp = 0;
foreach ($sumB as $k => $v) {
    $tmp += $v;
    $sumB[$k] = $tmp;
}
$tmp = 0;
foreach ($sumC as $k => $v) {
    $tmp += $v;
    $sumC[$k] = $tmp;
}

var_dump($sumA);
var_dump($sumB);
var_dump($sumC);

$keyA = array_keys($sumA);
$keyB = array_keys($sumB);
$keyC = array_keys($sumC);

foreach ($keyA as $idxA => $A) {
    foreach ($keyB as $idxB => $B) {
        echo "{$keyA[$idxA]} >= {$keyB[$idxB]}\n"; 
        if ($keyA[$idxA] >= $keyB[$idxB]) continue;
        foreach ($keyC as $idxC => $C) {
            echo "{$keyB[$idxB]} >= {$keyC[$idxC]}\n"; 
            if ($keyB[$idxB] >= $keyC[$idxC]) continue;
            echo "{$keyA[$idxA]}[{$sumA[$keyA[$idxA]]}] {$keyB[$idxB]}[{$sumB[$keyB[$idxB]]}] {$keyC[$idxC]}[{$sumC[$keyC[$idxC]]}]\n";
        }
    }
}


exit("END\n");

fscanf(STDIN, "%s", $c);
$a = array();
foreach (range(1, 4) as $x) $a[$x] = substr_count($c, $x);
echo max($a), " ", min($a), "\n";
