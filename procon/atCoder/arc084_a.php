<?php

// define('DEBUG', true);
define('DEBUG', false);

$ans = 0;

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

ksort($sumA);
ksort($sumB);
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
foreach ($sumC as $k => $v) {
    $tmp += $v;
    $sumC[$k] = $tmp;
}

if (DEBUG) var_dump($sumA);
if (DEBUG) var_dump($sumB);
ksort($sumC);
if (DEBUG) var_dump($sumC);


$keyA = array_keys($sumA);
$keyB = array_keys($sumB);
$keyC = array_keys($sumC);

$curA = 0;
$curC = 0;
foreach ($sumB as $k => $v) {
    if (DEBUG) echo "B:{$k} {$v}\n";

    if ($keyA[$curA] >= $k) {
        $mulA = 0;
    } else {
        while (count($keyA) > $curA+1 && $keyA[$curA+1] < $k) {
            if ($curA > count($keyA)) {
                break;
            }
            $curA++;
        }
        $mulA = $sumA[$keyA[$curA]];
    }
    if (DEBUG) echo " A:{$keyA[$curA]} {$sumA[$keyA[$curA]]} mulA:{$mulA}\n";

    $mulC = $sumC[$keyC[$curC]];
    while ($keyC[$curC] <= $k) {
        $curC++;
        if ($curC > count($keyC)) {
            $mulC = 0;
            break;
        }
        $mulC = $sumC[$keyC[$curC]];
    }
    if (DEBUG) echo " C:{$keyC[$curC]} {$sumC[$keyC[$curC]]} mulC:{$mulC}\n";

    $ans += $v * $mulA * $mulC;
}

echo $ans . PHP_EOL;

exit;


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
