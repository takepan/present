<?php
    /*
        Problem URL : http://wupc2nd.contest.atcoder.jp/tasks/wupc_02

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('display_errors', 'Off');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    fscanf(STDIN, "%d", $N);
    fscanf(STDIN, "%s", $S);

    $arr = str_split($S);
    $mem = array(0 => 0);

    for ($i = 1; $i < $N; $i++) {
        $arrTmp = array();
        $mizu = ($arr[$i] === 'X') * 1;

        $arrTmp[] = $mem[$i-1] + $mizu;
        if ($i >= 2) {
            $arrTmp[] = $mem[$i-2] + $mizu;
        }
        if ($i >= 3) {
            $arrTmp[] = $mem[$i-3] + $mizu;
        }
        $mem[$i] = min($arrTmp);
    }

    echo $mem[$N-1] . PHP_EOL;
