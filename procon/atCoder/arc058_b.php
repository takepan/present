<?php
    /*
        Problem URL : http://arc058.contest.atcoder.jp/tasks/arc058_b
 
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);
 
    // N“ú‚ÅKŸ
    // fscanf(STDIN, "%d %d %d %d", $H, $W, $A, $B);

    $m = array();

    getMap(8, 8, 0, 0);
    getMap(8, 8, 3, 3);
    // getMap(4, 4, 3, 2);

    function getMap($H, $W, $A, $B) {
        global $m;
        for ($y = 0; $y <= $H; $y++) {
            for ($x = 0; $x <= $W; $x++) {
                // echo $x . " " . $y . PHP_EOL;
                if ($x == 0 || $y == 0) {
                    if ($y > $H - $A && $x < $B)
                    {
                        $m[$y][$x] = 0;
                    } else {
                        $m[$y][$x] = 1;
                    }
                } else {
                    if ($y > $H - $A && $x < $B)
                    {
                        $m[$y][$x] = 0;
                    } else {
                        $m[$y][$x] = $m[$y-1][$x] + $m[$y][$x-1];
                    }
                }
            }
        }
        //echo $m[$W][$H];
        foreach ($m as $Y => $v) {
            foreach ($v as $X => $value) {
                echo sprintf("%5d ", $m[$Y][$X]);
            }
            echo PHP_EOL;
        }
        echo PHP_EOL;
        return $m;
    }
