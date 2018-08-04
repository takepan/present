<?php
    /*
        Problem URL : http://abc057.contest.atcoder.jp/tasks/abc057_c

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // define('DEBUG', true);
    define('DEBUG', false);

    if (DEBUG) {
        $start = microtime(true);
    }

    fscanf(STDIN, "%d %d\n", $N, $M);
    $ans = array_pad(array(), $N+1, 0);
    var_dump($ans);
    for ($i = 0; $i < $M; $i++) {
        fscanf(STDIN, "%d %d\n", $a, $b);
        $e[$a][$b] = true;
        $e[$b][$a] = true;
    }
    for ($i = 0; $i < $Q; $i++) {
        $idx = $Q - $i;
        fscanf(STDIN, "%d %d\n", $v[$i], $d[$idx], $c[$idx]);
    }
    $ret = solve();
    // echo "ANS:\n";
    for ($i = 0; $i < count($ret); $i++) {
        echo $ret[$i] . PHP_EOL;
    }

    if (DEBUG) {
        $t = microtime(true) - $start;
        printf ("Elapsed time: %7.3f sec\n", $t);
    }

    // 頂点xから距離yの色$cを塗る、のみに専念
    function solve($x, $y, $c) {
        global $m, $e, $flg, $ans;
        printf("solve x:%d y:%d c:%d\n", $x, $y, $c);
        if (!isset($m[$x][$y]) {
            // 先にフラグを立てておく
            $m[$x][$y] = 1;

            if ($c > 0) {
                foreach ($e[$x] as $dist) {
                    solve($dist, $y-1, $c);
                }
            } else {
                if ($ans[$x] == 0) {
                    $ans[$x] = $c;
                }
            }
        }
        return $ans;
    }
