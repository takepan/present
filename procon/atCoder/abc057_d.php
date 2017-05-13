<?php
    /*
        Problem URL : http://abc057.contest.atcoder.jp/tasks/abc057_d

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // define('DEBUG', true);
    define('DEBUG', false);

    // $a = 0;
    // for ($i = 1; $i <= 50; $i++) {
    //     $a += p(50, $i);
    //     // echo p(50, $i) . PHP_EOL;
    // }
    // printf("ans:%d\n", $a);
    // exit;

    if (DEBUG) {
        $start = microtime(true);
    }
    echo solve();
    if (DEBUG) {
        $t = microtime(true) - $start;
        printf ("Elapsed time: %7.3f sec\n", $t);
    }

    function p($x, $y) {
        $ret = 1;
        for ($i = $x; $i > $x - $y; $i--) {
            // echo "* {$i} / ". ($x - $i + 1) . "\n";
            $ret *= $i;
            $ret /= $x - $i + 1;
        }
        return $ret;
    }

    function solve() {
        $idx = array();
        $maxavg = 0;
        fscanf(STDIN, "%d %d %d\n", $N, $A, $B);
        $v = explode(" ", trim(fgets(STDIN)));
        foreach ($v as $vv) {
            $idx[$vv]++;
        }
        rsort($v);
        // var_dump($v);
        for ($i = $A; $i <= $B; $i++) {
            $tmp = null;
            $posi = 0;
            for ($j = 0; $j < $i; $j++) {
                if (is_null($tmp)) {
                    $tmp = $v[$j];
                }
                if ($tmp != $v[$j]) {
                    $posi = $j;
                    $tmp = $v[$j];
                }
                $total[$i] += $v[$j];
                $last[$i] = $v[$j];
            }
            $ai[$i] = $i;
            $pos[$i] = $posi;
            $avg[$i] = $total[$i] / $i;
            $maxavg = max($avg[$i], $maxavg);
            if (DEBUG) echo "PPPP {$idx[$last[$i]]} X " . ($i - $pos[$i]) . "\n";
            $toori[$i] = p($idx[$last[$i]], $i - $pos[$i]);
            if (DEBUG) echo "toori:{$toori[$i]}\n";
        }
        if (DEBUG) var_dump($total);
        $ans = 0;
        foreach ($total as $k => $v) {
            if (DEBUG) echo "ai:{$ai[$k]} t:{$total[$k]} l:{$last[$k]} a:{$avg[$k]} pos:{$pos[$k]} toori:{$toori[$k]} idx:".$idx[$last[$k]]."\n";
            if ($maxavg == $avg[$k]) {
                $ans += $toori[$k];
            }
        }
        echo $maxavg . PHP_EOL;
        printf("%d\n", $ans);
    }
