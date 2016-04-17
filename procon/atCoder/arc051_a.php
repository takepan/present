<?php
    /*
        Problem URL : http://arc051.contest.atcoder.jp/tasks/arc051_a

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $fp = fopen("php://stdin", "r+");
    list($x1, $y1, $r) = explode(" ", trim(fgets($fp)));
    list($x2, $y2, $x3, $y3) = explode(" ", trim(fgets($fp)));

    $m = array();

    define('DEBUG', 0);

    $sz = 100;

    for ($x = -$sz; $x < $sz; $x++) {
        for ($y = -$sz; $y < $sz; $y++) {
            if (DEBUG) echo $x . " " . $y . " ";
            if ($x+1 > $x1) {
                if (DEBUG) echo "右";
                $pos1_x = $x;
                $pos2_x = $x + 1;
            } else {
                if (DEBUG) echo "左";
                $pos1_x = $x + 1;
                $pos2_x = $x;
            }
            if ($y+1 > $y1) {
                if (DEBUG) echo "上";
                $pos1_y = $y;
                $pos2_y = $y + 1;
            } else {
                if (DEBUG) echo "下";
                $pos1_y = $y + 1;
                $pos2_y = $y;
            }
            if (DEBUG) echo " x:{$pos1_x} y:{$pos1_y} x:{$pos2_x} y:{$pos2_y} ";
            $d1 = sqrt( pow($pos1_x - $x1, 2) + pow($pos1_y - $y1, 2) );
            $d2 = sqrt( pow($pos2_x - $x1, 2) + pow($pos2_y - $y1, 2) );
            if ($d1 >= $r) {
                $m[$x][$y] = 0;
            } elseif ($d2 <= $r) {
                $m[$x][$y] = 2;
            } else {
                $m[$x][$y] = 1;
            }
            if (DEBUG) echo $m[$x][$y] . PHP_EOL;
        }
    }

    for ($x = $x2; $x < $x3; $x++) {
        for ($y = $y2; $y < $y3; $y++) {
            $m[$x][$y] += 4;
        }
    }

    $blue = false;
    $red = false;
    for ($x = -$sz; $x < $sz; $x++) {
        for ($y = -$sz; $y < $sz; $y++) {
            if (DEBUG) echo "{$x} {$y} {$m[$x][$y]}\n";
            if ($m[$x][$y] == 4 || $m[$x][$y] == 5) $blue = true;
            if ($m[$x][$y] == 1 || $m[$x][$y] == 2) $red = true;
        }
    }

    echo $red === true ? "YES" : "NO";
    echo PHP_EOL;
    echo $blue === true ? "YES" : "NO";
    echo PHP_EOL;
