<?php
    /*
        Problem URL : https://beta.atcoder.jp/contests/arc097/tasks/arc097_a

        Score  :
        Result :
        Time   : ms
        Memory : KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    define('DEBUG', false);

    fscanf(STDIN, "%s", $s);
    fscanf(STDIN, "%d", $K);

    $array = array();

    $len = strlen($s);
    for ($i = 0; $i < $len; $i++) {
        for ($j = 1; $j <= $len - $i; $j++) {
            $str = substr($s, $i, $j);
            // echo $str . PHP_EOL;
            $array[$str] = 1;
        }
    }
    // var_dump($array);

    $keys = array_keys($array);
    sort($keys);
    // var_dump($keys);

    echo $keys[$K - 1] . PHP_EOL;

