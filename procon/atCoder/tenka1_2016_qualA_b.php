<?php
    /*
        Problem URL : http://tenka1-2016-quala.contest.atcoder.jp/tasks/tenka1_2016_qualB_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $arrPath = array();

    // N M
    // P1
    // :
    // PN−1
    // B0 C0
    // :
    // BM−1 CM−1

    // define('DEBUG', true);
    define('DEBUG', false);

    fscanf(STDIN, "%d %d", $N, $M);
    for ($i = 1; $i < $N; $i++) {
        fscanf(STDIN, "%d", $P[$i]);
        $arrPath[$P[$i]][$i] = $BB[$i];
    }
    for ($i = 0; $i < $M; $i++) {
        fscanf(STDIN, "%d %d", $a, $b);
        $BB[$a] = $b;
    }
    for ($i = 1; $i < $N; $i++) {
        if (isset($BB[$i])) {
            $arrPath[$P[$i]][$i] = $BB[$i];
        } else {
            $arrPath[$P[$i]][$i] = -PHP_INT_MAX;
        }
    }
    $ans = 0;
    $flag = true;
    while($flag) {
        $mem = array();
        $flag = false;
        if (count($arrPath) === 1)
        {
            $ans += array_sum($arrPath[0]);
            break;
        }
        foreach ($arrPath as $key => $val) {
            if (array_sum($arrPath[$key]) > 0) {
                $flag = true;
                $mmax = max($arrPath[$key]);
                $mmin = min($arrPath[$key]);
                if (DEBUG) echo "mmin = $mmin \n";
                foreach ($val as $key2 => $val2) {
                    $arrPath[$key][$key2] -= $mmin;
                }
                $mem[$key] = $mmin;
                if (DEBUG) echo "{$key} = {$mmin}\n";
                if (DEBUG) sleep(1);
                $ans += array_sum($arrPath[$key]);
                unset($arrPath[$key]);
            }
        }
        foreach ($arrPath as $key => $val) {
            foreach ($val as $key2 => $val2) {
                if (isset($mem[$key2])) {
                    if (DEBUG) echo "BINGO {$key2}\n";
                    if (DEBUG) sleep(1);
                    $arrPath[$key][$key2] = $mem[$key2];
                    unset($mem[$key2]);
                }
            }
        }
        if (DEBUG) var_dump($arrPath);
        if (DEBUG) sleep(3);
    }
    echo $ans . PHP_EOL;
