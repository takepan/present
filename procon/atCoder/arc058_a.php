<?php
    /*
        Problem URL : http://arc058.contest.atcoder.jp/tasks/arc058_a
 
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);
 
    // N“ú‚ÅKŸ
    fscanf(STDIN, "%d %d", $N, $K);
    $D = explode(" ", trim(fgets(STDIN)));

    for ($i = $N; $i < 100000; $i++) {
        $str = str_split($i);
        // var_dump($str);
        $len = count($str);
        $bool = true;
        for ($j = 0; $j < $len; $j++) {
            if (in_array($str[$j], $D) === true) {
                $bool = false;
            }
        }
        if ($bool === true) {
            echo $i . PHP_EOL;
            exit;
        }
    }

