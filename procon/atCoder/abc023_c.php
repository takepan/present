<?php
    /*
        Problem URL : https://abc023.contest.atcoder.jp/tasks/abc023_c

        Score  : 30
        Result : TLE
        Time   : - ms
        Memory : - KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $datXY = array();

    $locX = array();
    $locY = array();

    $tmp = 0;
    $answer = 0;

    $fp = fopen("php://stdin", "r+");
    list($R, $C, $K) = explode(" ", trim(fgets($fp)));
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; $i++) {
        list($rr, $cc) = explode(" ", trim(fgets($fp)));
        $datXY[$rr][$cc] = 1;
        if (!isset($locX[$cc])) {
            $locX[$cc] = 1;
        } else {
            $locX[$cc]++;
        }
        if (!isset($locY[$rr])) {
            $locY[$rr] = 1;
        } else {
            $locY[$rr]++;
        }
    }

    /*
    for ($i = 1; $i <= $C; $i++) {
        echo "{$i} locX:{$locX[$i]}" . PHP_EOL;
    }

    for ($i = 1; $i <= $R; $i++) {
        echo "{$i} locY:{$locY[$i]}" . PHP_EOL;
    }
    */

    for ($X = 1; $X <= $C; $X++) {
        for ($Y = 1; $Y <= $R; $Y++) {
            if ($locX[$X] + $locY[$Y] - $datXY[$Y][$X] == $K) {
                $answer++;
            }
        }
    }
    echo $answer . PHP_EOL;

