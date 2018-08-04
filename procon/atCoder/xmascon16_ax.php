<?php
    /*
        Problem URL : http://xmascon16noon.contest.atcoder.jp/tasks/xmascon16_a
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    // define('DEBUG', true);
    define('DEBUG', false);
 
    fscanf(STDIN, "%d", $N);
    $q = decbin($N);
    $len_q = strlen($q);
    $ans = 0;
    $from = 0;

    for ($i = 0; $i < $len_q; $i++) {
        if ($q[$len_q-$i-1] == '1') {
            $num = pow(2, $i);
            $to = $from + pow(2, $i);
            
            $ret = mock($from, $to);
            $ans += $ret;
            $from += $num;
        }
    }

    echo "! " . $ans . PHP_EOL;

    function mock($from, $to) {
        $arr = [1, 2, 3, 4, 5];
        $ret = 0;
        
        echo "? ", $from, " ", $to, PHP_EOL;

        return trim(fgets(STDIN));

        // for ($i = $from; $i < $to; $i++) {
        //  $ret += $arr[$i];
        // }
        // return $ret . PHP_EOL;

    }