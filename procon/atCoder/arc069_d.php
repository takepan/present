<?php


fscanf(STDIN, "%d %d", $H, $W);
fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
array_unshift($a, 0);

$x = 0;
$y = 0;
$dx = 1;
$dy = 0;
$ans = array(array());
$cursor = 1;

while(true) {
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
        if ($dx == 1 && $dy == 0) {
            $x--;
            $y++;
            $dx = 0;
            $dy = 1;
        } elseif ($dx == -1 && $dy == 0) {
            $x++;
            $y--;
            $dx = 0;
            $dy = -1;
        } elseif ($dx == 0 && $dy == 1) {
            $y--;
            $x--;
            $dx = -1;
            $dy = 0;
        } elseif ($dx == 0 && $dy == -1) {
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
