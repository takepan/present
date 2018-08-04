<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d %d", $H, $W);
fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
array_unshift($a, 0);
// var_dump($a);

$x = 0;
$y = 0;
$dx = 1;
$dy = 0;
$ans = array(array());
$cursor = 1;

while(true) {
    if (DEBUG) echo "x:{$x} y:{$y} c:{$cursor}\n";
    $a[$cursor]--;
    $color = $cursor;
    if ($a[$cursor] == 0) {
        $cursor++;
    }
    $ans[$x][$y] = $color;
    if ($cursor > $N) {
        break;
    }
    $x += $dx;
    $y += $dy;
    if ($x == $W) {
        $x--;
        $y++;
        $dx = 0;
        $dy = 1;
    }
    if ($y == $H) {
        $y--;
        $x--;
        $dx = -1;
        $dy = 0;
    }
    if ($x < 0) {
        $x++;
        $y--;
        $dx = 0;
        $dy = -1;
    }
    if ($y < 0) {
        $x++;
        $y++;
        $dx = 1;
        $dy = 0;
    }
    if (isset($ans[$x][$y])) {
        if (DEBUG) echo "XX:{$x} YY:{$y} {$dx} {$dy}\n";
        if ($dx == 1 && $dy == 0) {
            if (DEBUG) echo "case A\n";
            $x--;
            $y++;
            $dx = 0;
            $dy = 1;
        } elseif ($dx == -1 && $dy == 0) {
            if (DEBUG) echo "case B\n";
            $x++;
            $y--;
            $dx = 0;
            $dy = -1;
        } elseif ($dx == 0 && $dy == 1) {
            if (DEBUG) echo "case C\n";
            $y--;
            $x--;
            $dx = -1;
            $dy = 0;
        } elseif ($dx == 0 && $dy == -1) {
            if (DEBUG) echo "XXXX\n";
            $x++;
            $y++;
            $dx = 1;
            $dy = 0;
        }
    }
}

for ($y = 0; $y < $H; $y++) {
    $arrTmp = array();
    for ($x = 0; $x < $W; $x++) {
        $arrTmp[] = $ans[$x][$y];
    }
    echo implode(" ", $arrTmp) . PHP_EOL;
}

