<?php
    /*
        Problem URL : http://arc049.contest.atcoder.jp/tasks/arc049_a

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $fp = fopen("php://stdin", "r+");
    $S = trim(fgets($fp));
    $ABCD = explode(" ", trim(fgets($fp)));
    $ext = 0;
    foreach ($ABCD as $v) {
    	$S = substr($S, 0, $v + $ext) . "\"" . substr($S, $v + $ext);
    	$ext++;
    }

    echo $S . PHP_EOL;
