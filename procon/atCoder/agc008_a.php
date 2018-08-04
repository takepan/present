<?php
    /*
        Problem URL : http://agc008.contest.atcoder.jp/tasks/agc008_a
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);

    $arr = array();

    fscanf(STDIN, "%d %d", $x, $y);

    if ($x >= 0 && $y >= 0) {
        if ($x < $y) {
            echo ($y - $x) . PHP_EOL;
            exit;
        } elseif ($y == 0) {
            echo (($x - $y) + 1 ) . PHP_EOL;
            exit;
        } else {
            echo (($x - $y) + 2 ) . PHP_EOL;
            exit;
        }
    } elseif ($x >= 0 && $y < 0) {
        if ($x >= -$y) {
            echo ($x + $y + 1) . PHP_EOL;
            exit;
        } else {
            echo (-$y - $x + 1) . PHP_EOL;
            exit;
        }
    } elseif ($x < 0 && $y >= 0) {
        if ($x == -$y) {
            echo "1\n";
            exit;
        } elseif (-$x >= $y) {
            $w1 = -$x - $y + 1;
            $w2 = $y - $x;
            echo min($w1, $w2) . PHP_EOL;
            exit;
        } else {
            $w1 = $y - $x;
            $w2 = $y + $x + 1;
            echo min($w1, $w2) . PHP_EOL;
            exit;
        }
    } elseif ($x < 0 && $y < 0) {
        if ($x > $y) {
            echo ($x - $y + 2) . PHP_EOL;
            exit;
        } else {
            echo ($y - $x) . PHP_EOL;
            exit;
        }
    }
