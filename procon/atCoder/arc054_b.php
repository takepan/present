<?php
    /*
        Problem URL : http://arc054.contest.atcoder.jp/tasks/arc054_b

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    fscanf(STDIN, "%f", $P);
    $ans = solve(0, $P);
    // echo "ans= ". $ans . PHP_EOL;
    // echo "tmp= ". $tmp . PHP_EOL;
    echo f($tmp) . PHP_EOL;

    $tmp = 0;

    $cnt = 0;
    function solve($s_min, $s_max) {
        global $cnt;
        global $tmp;
        $cnt++;
        // echo "cnt:{$cnt} = {$s_min} {$s_max}\n";

        // if ($s_max - $s_min < 0.000000000000001) {
        if ($s_max - $s_min < 0.0000000000001) {
            $tmp = ($s_max + $s_min) / 2;
            return $tmp;
        }

        // if ($s_max === $s_min) {
        //     return ($s_max + $s_min) / 2;
        // }

        $period = ($s_max - $s_min) / 3;
        $p0 = $s_min + $period * 0;
        $p1 = $s_min + $period * 1;
        $p2 = $s_min + $period * 2;
        $p3 = $s_min + $period * 3;

        $v0 = f($p0);
        $v1 = f($p1);
        $v2 = f($p2);
        $v3 = f($p3);

        $v_min = min($v0, $v1, $v2, $v3);
        // echo "v_min : {$v_min}\n";
        if ($v_min == $v0) {
            // echo "v0\n";
            solve($p0, $p1);
        } elseif ($v_min == $v1) {
            // echo "v1\n";
            solve($p0, $p2);
        } elseif ($v_min == $v2) {
            // echo "v2\n";
            solve($p1, $p3);
        } elseif ($v_min == $v3) {
            // echo "v3\n";
            solve($p2, $p3);
        }
    }

    function moore($x) {
        $y = pow(2, $x / 1.5);
        // echo "{$x} {$y}\n";
        return $y;
    }

    function f($a) {
        global $P;
        $up = moore($a);
        // echo "speed up: {$up}\n";
        // パワーアップする前はa

        // $term = ($P - $a) / $up;
        $term = $P / $up;

        // echo "{$a} + {$term}\n";

        return $a + $term;
    }

