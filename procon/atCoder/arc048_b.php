<?php
    /*
        Problem URL : https://arc048.contest.atcoder.jp/tasks/arc048_b
        Score  : 100
        Result : AC
        Time   : 1985 ms
        Memory : 127732 KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $sumR = array();
    $winR = array();
    $losR = array();
    $sumRH = array(array());

    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    for ($i = 0; $i < $N; $i++) {
        list($R[$i], $H[$i]) = explode(" ", trim(fgets($fp)));
        $sumR[$R[$i]]++;
        $sumRH[$R[$i]][$H[$i]]++;
    }

    ksort($sumR);

    $tmpW = 0;
    foreach ($sumR as $k => $v) {
        $winR[$k] = $tmpW;
        $tmpW += $sumR[$k];
        $losR[$k] = $N - $tmpW;
    }

    /*
    foreach ($winR as $k => $v) {
        echo "RATE:{$k} NUM:{$sumR[$k]} WIN:{$winR[$k]} LOSE:{$losR[$k]}" . PHP_EOL;
    }
    echo PHP_EOL;
    */

    foreach ($R as $k => $v) {
        $win = $winR[$v];
        $los = $losR[$v];
        $tie = 0;
        if ($sumR[$v] > 1) {
            //echo "!2+! ";
            switch ($H[$k]) {
                case "1":
                    $win += $sumRH[$v]['2'];
                    $los += $sumRH[$v]['3'];
                    $tie = $sumRH[$v]['1'] - 1;
                    break;

                case "2":
                    $win += $sumRH[$v]['3'];
                    $los += $sumRH[$v]['1'];
                    $tie = $sumRH[$v]['2'] - 1;
                    break;

                case "3":
                    $win += $sumRH[$v]['1'];
                    $los += $sumRH[$v]['2'];
                    $tie = $sumRH[$v]['3'] - 1;
                    break;
            }
        }
        //echo "RATE:{$R[$k]} HAND:{$H[$k]} ";
        printf("%d %d %d\n", $win, $los, $tie);
    }
