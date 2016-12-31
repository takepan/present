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

    $arr = array();

    // fscanf(STDIN, "%d", $N);
    $N = pow(10, 5);
    $bin = decbin($N);
    $bin_len = strlen($bin);
    $bin_arr = str_split($bin);
    for ($i = 0 ; $i < $bin_len - 1; $i++) {
        $moto = substr($bin, 0, $i + 1) . str_repeat("0", $bin_len - $i - 1);
        $moto_num = bindec($moto);
        $ext = pow(2, $bin_len - $i - 1);
        $num_new = $moto_num + $ext;
        $diff = $num_new - $N;

        $nokori = substr($bin, $i + 1);
        echo $nokori . PHP_EOL;
        $nokori_1 = substr_count($nokori, "1");


        printf("aaaa=%s\nmoto=%s %d %d %d diff: %d  : %d\n", implode("", $bin_arr), $moto, $moto_num, $ext, $num_new, $diff, $nokori_1);
    }

    echo $bin;

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