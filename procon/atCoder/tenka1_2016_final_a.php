<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$V = 1000;
$E = 1998;

$x = $y = $a = $b = array();

$x[1] = 333;
$y[1] = 333;

for ($i = 0; $i < 333; $i++) {
    $x[2 + $i] = $i;
    $y[2 + $i] = 333 - $i;
}
for ($i = 0; $i < 333; $i++) {
    $x[335 + $i] = 333 + $i;
    $y[335 + $i] = $i;
}
for ($i = 0; $i < 333; $i++) {
    $x[668 + $i] = 666 - $i;
    $y[668 + $i] = 333 + $i;
}

for ($i = 2; $i <= 1000; $i++) {
    $a[$i - 2] = 1;
    $b[$i - 2] = $i;
    $a[$i + 997] = $i;
    $b[$i + 997] = ($i === 1000) ? 2 : $i + 1;
}

if (count($a) != $E) {
    echo "ERR \$a\n";
    exit;
}

if (count($b) != $E) {
    echo "ERR \$b\n";
    exit;
}

if (count($x) != $V) {
    echo "ERR \$x\n";
    exit;
}

if (count($y) != $V) {
    echo "ERR \$y\n";
    exit;
}

echo "{$V} {$E}\n";
for ($i = 0; $i < $E; $i++) {
    printf("%d %d\n", $a[$i], $b[$i]);
}
for ($i = 1; $i <= $V; $i++) {
    printf("%d %d\n", $x[$i], $y[$i]);
}
