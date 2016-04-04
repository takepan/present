<?php
    /*
        Problem URL : https://arc045.contest.atcoder.jp/tasks/arc045_a

        Score  : 100
        Result : AC
        Time   : 77 ms
        Memory : 4492 KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    $arr = array();
    $arr['Left'] = '<';
    $arr['Right'] = '>';
    $arr['AtCoder'] = 'A';

    $arrS = array();
    $arrAnswer = array();

    $fp = fopen("php://stdin", "r+");
    $arrS = explode(" ", trim(fgets($fp)));
    $cntS = count($arrS);
    for ($i = 0; $i < $cntS; $i++) {
        $arrAnswer[] = $arr[$arrS[$i]];
    }

    echo implode(" " , $arrAnswer) . PHP_EOL;
