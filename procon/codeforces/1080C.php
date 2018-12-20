<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);
define('DEBUG', true);
//define('DEBUG', false);

function calc($x1, $y1, $x2, $y2) {
    if (($x2 - $x1 + 1) % 2 === 0) {
        return 0;
    }
    if (($y2 - $y1 + 1) % 2 === 0) {
        return 0;
    }
    $corner1 = ($x1 + $y1) % 2 == 0;
    return $corner1 ? .5 : -.5;
}

fscanf(STDIN, "%d", $t);
for ($i = 0; $i < $t; $i++) {
    fscanf(STDIN, "%d %d", $x, $y);
    $ret = calc(1, 1, $x, $y);
    //var_dump($ret);
    $white = $x * $y / 2 + $ret;
    $black = $x * $y / 2 - $ret;
    printf("START %d %d\n", $white, $black);
    //exit;
    fscanf(STDIN, "%d %d %d %d", $x1, $y1, $x2, $y2);
    $ret = calc($x1, $y1, $x2, $y2);
    $a = ($x2 - $x1 + 1) * ($y2 - $y1 + 1);
    $w = $a / 2 + $ret;
    $b = $a / 2 - $ret;
    printf("tmp_w:%d tmp_b:%d\n", $w, $b);
    $black -= $b;
    $white += $b;
    if (DEBUG) printf("TURN 1 END w:%d b:%d\n", $white, $black);
   
    fscanf(STDIN, "%d %d %d %d", $x3, $y3, $x4, $y4);
    $ret = calc($x3, $y3, $x4, $y4);
    $a = ($x4 - $x3 + 1) * ($y4 - $y3 + 1);
    $w = $a / 2 + $ret;
    $b = $a / 2 - $ret;
    //printf("tmp_w:%d tmp_b:%d\n", $w, $b);
    $black += $w;
    $white -= $w;
    if (DEBUG) printf("w:%d b:%d\n", $white, $black);



    // x1x2 x3x4
    // 3-7 4-6 4   
    // 3-4 6-7 N/A N/A
    // 3-6 4-7
 
    // 1-3 5-7 N/A
    // 1-5 3-7 3-5
    // 1-7 3-5 3-5
    // 3-5 1-7 3-5
    // 3-7 1-5 3-5
    // 5-7 1-3 N/A

    if ($x2 < $x3 || $x4 < $x1 || $y2 < $y3 || $y4 < $y1) {
        
    } else {
        $x5 = max($x1, $x3);
	$x6 = min($x2, $x4);
	$y5 = max($y1, $y3);
	$y6 = min($y2, $y4);
	
        $ret = calc($x5, $y5, $x6, $y6);
        if (DEBUG) echo "x5:{$x5} x6:{$x6} y5:{$y5} y6:{$y6}\n";
        if (DEBUG) var_dump($ret);
        $a = ($x6 - $x5 + 1) * ($y6 - $y5 + 1);
        if (DEBUG) echo "area: {$a}\n";
        $w = $a / 2 + $ret;
        $b = $a / 2 - $ret;
        if (DEBUG) printf("tmp_w:%d tmp_b:%d\n", $w, $b);
        $black += $b;
        $white -= $b;
        if (DEBUG) printf("=======> ANSWER w:%d b:%d\n", $white, $black);
    }
    if (DEBUG) printf("=======> ANSWER w:%d b:%d\n", $white, $black);
    printf("%d %d\n", $white, $black);
}


