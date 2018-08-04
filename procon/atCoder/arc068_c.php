<?php
    /*
        Problem URL : http://arc068.contest.atcoder.jp/tasks/arc068_b
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    $kai = 0;
    $ans = array();

    fscanf(STDIN, "%d %d", $N, $M);

    $d = array_pad(array(), $M+2, 0);
    echo implode(" ", $d) . PHP_EOL;
    // var_dump($d);
    // exit;

    for ($i = 0; $i < $N; $i++) {
        fscanf(STDIN, "%d %d", $l, $r);
        // echo "{$l} {$r}\n";
        $d[$l]++;
        $d[$r+1]--;
        // ksort($d);
        // echo implode(" ", $d) . PHP_EOL;
    }

    // ksort($d);
    // var_dump($d);
    // exit;

    for ($i = 1; $i <= $M; $i++) {
        $s[$i] = $s[$i-1] + $d[$i];
    }
    ksort($s);

    // var_dump($s);
    // exit;

    for ($i = $M; $i > 0; $i--) {
        echo "{$i} {$s[$i]}\n";
        if (isset($ans[$i*2])) {
            $ans[$i] = $ans[$i*2] + $s[$i];
        } else {
            $ans[$i] = $s[$i];
        }
        echo "{$i} {$ans[$i]}\n";
    }

    for ($i = 1; $i <= $M; $i++) {
        echo "{$i}: " . $ans[$i] . PHP_EOL;
    }
