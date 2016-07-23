<?php
    /*
        Problem URL : http://arc057.contest.atcoder.jp/tasks/arc057_b
 
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);
 
    // N日でK勝
    fscanf(STDIN, "%d %d", $N, $K);
    if (DEBUG) echo "DAYS:{$N} WINS:{$K}\n";
    // $t = 0;
    $total = array();
    // $total = 0;
    $m = array();
    $m[0][0] = 0;
 
    for ($i = 0; $i < $N; $i++) {
	if ($i >= 2) unset($m[$i-2]);
	//echo $i . PHP_EOL;

        // echo "{$i}\n";
        fscanf(STDIN, "%d", $games);
        $total[$i+1] += $total[$i] + $games;
        for ($j = 0; $j <= $i; $j++) {
            // 前日までの勝率の計算
            if ($i == 0) {
                $per = 0;
            } else {
                $per = $m[$i][$j] / $total[$i];
            }
            if (DEBUG) printf("DAY:%d SCR:%d WIN:%d %.f", $i, $j, $m[$i][$j], $per);
            if (DEBUG) echo PHP_EOL;
            // 機嫌を良くする
            // $m[$i+1][$j+1] = 1;
            $wins = ceil($games * $per + .000001);
            $m[$i+1][$j+1] = $m[$i][$j] + $wins;
 
            // 機嫌を良くしない
            // $m[$i+1][$j] = min($m[$i+1][$j], 1);
            $m[$i+1][$j] = min($m[$i][$j], $m[$i+1][$j]);
 
        }
    }
 
    if (DEBUG) var_dump($m[$N]);
    if (DEBUG) echo "Total contests {$total[$N]} {$K}\n";
 
    if ($total[$N] == $K) {
        echo "1\n";
        exit;
    }
 
 
    for ($i = $N; $i >= 0; $i--) {
        if (DEBUG) echo "{$i} {$m[$N][$i]} {$K} \n";
        if ($m[$N][$i] <= $K) {
            echo "{$i}\n";
            exit;
        }
    }
 