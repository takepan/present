<?php
    /*
        Problem URL : http://agc012.contest.atcoder.jp/tasks/agc012_b

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
    for ($i = 0; $i < $M; $i++) {
        fscanf(STDIN, "%d %d\n", $a, $b);
        $e[$a][$b] = true;
        $e[$b][$a] = true;
    }
    fscanf(STDIN, "%d\n", $Q);
    for ($i = 0; $i < $Q; $i++) {
        $idx = $Q - $i - 1;
        fscanf(STDIN, "%d %d %d\n", $v[$idx], $d[$idx], $c[$idx]);
    }
    if (DEBUG) var_dump($v);
    for ($i = 0; $i < $Q; $i++) {
        solve($v[$i], $d[$i], $c[$i]);
    }
    // echo "ANS:\n";
    for ($i = 1; $i < count($ans); $i++) {
        echo $ans[$i] . PHP_EOL;
    }

    if (DEBUG) {
        $t = microtime(true) - $start;
        printf ("Elapsed time: %7.3f sec\n", $t);
    }

    // 頂点xから距離yの色$cを塗る、のみに専念
    function solve($x, $y, $c) {
        global $m, $e, $ans;
        if (DEBUG) printf("solve x:%d y:%d c:%d\n", $x, $y, $c);
        // sleep(1);
        if (!isset($m[$x][$y])) {
            // 先にフラグを立てておく
            $m[$x][$y] = 1;

            if ($ans[$x] == 0) {
                $ans[$x] = $c;
            }
            if ($y > 0) {
                if (DEBUG) echo $x . " => " . implode(",", array_keys($e[$x])) . PHP_EOL;
                if (is_array($e[$x])) {
                    foreach ($e[$x] as $k => $dummy) {
                        solve($k, $y-1, $c);
                    }
                }
            }
        }
        return $ans;
    }
