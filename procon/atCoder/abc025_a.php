<?php
    /*
        Problem URL : http://abc025.contest.atcoder.jp/tasks/abc025_a

        Result : AC
        Time   : 70 ms
        Memory : 5088 KB
     */

    $fp = fopen("php://stdin", "r+");
    $S = trim(fgets($fp));
    $N = trim(fgets($fp));
    $N--;
    $Z = 5;
    $arr = array();

    $Slen = strlen($S);
    $X = $N % $Z;
    $Y = ($N - $X) / $Z;

    for ($i = 0; $i < $Slen; $i++) {
        $arr[$i] = substr($S, $i, 1);
    }

    sort($arr);

    //var_dump($arr);

    //echo "\$X : {$X} \n";
    //echo "\$Y : {$Y} \n";

    echo $S[$Y];
    echo $S[$X];
    echo PHP_EOL;
