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

    if (DEBUG) {
        $N = pow(10, 5) - 1;
        $N = pow(2, 16) - 1;
        $N = bindec("111011101110111");
        $N = bindec("110110110110111");
        $N = 15;
        echo "\$N = {$N}\n";
    } else {
        fscanf(STDIN, "%d", $N);
    }

    if ($N > pow(10, 5)) {
        exit;
    }

    $bin = decbin($N);
    $str = str_reverse($bin);
    $len = strlen($str);

    if (DEBUG) echo $bin . PHP_EOL;
    if (DEBUG) echo $str . PHP_EOL;

    // 111があるかどうか
    while (strpos($str, "111") !== false) {
        $pos = strpos($str, "111");
        $con = 0;
        $i = 0;
        while (substr($str, $pos + $i, 1) == "1") {
            $con = $i;
            $i++;
        }
        if (DEBUG) echo "pos:" . $pos . " con:{$con}\n";

        $new_str = "";
        $new_str .= substr($str, 0, $pos);
        $new_str .= "-";
        $new_str .= str_repeat("0", $con);
        $new_str .= "1";
        $new_str .= substr($str, $pos + $con + 2);
        if (DEBUG) echo $new_str . PHP_EOL;
        $str = $new_str;
    }

    // 桁が増えていた場合
    if ($len + 1 == strlen($str)) {
        $str[$len-1] = "2";
        $str = substr($str, 0, $len);
    }
    if (DEBUG) echo $str . PHP_EOL;

    // $str = str_reverse($str);

    // echo $str . PHP_EOL;

    // 組み立て
    $arr = str_split($str);
    $cnt = count($arr);

    $stock_p = array();
    $stock_n = array();

    for ($i = 0; $i < $cnt; $i++) {
        switch ($arr[$i]) {
            case "2":
                $stock_p[] = pow(2, $i);
            case "1":
                $stock_p[] = pow(2, $i);
                break;

            case "-":
                $stock_n[] = pow(2, $i);
                break;
        }
    }
    
    $pos = 0;
    $ans = 0;
    $task = array();
    while($stock_p) {
        $p = array_pop($stock_p);
        $ans += mock($pos, $pos + $p);
        $pos += $p;
        if (DEBUG) echo "ans = {$ans}\n";
        while($stock_n) {
            $n = array_pop($stock_n);
            $pos -= $n;
            $ans -= mock($pos, $pos + $n);
            if (DEBUG) echo "ans = {$ans}\n";
        }
    }
    rsort($stock_p);
    rsort($stock_n);
    // var_dump($stock_p);
    // var_dump($stock_n);

    echo "! " . $ans . PHP_EOL;

    function str_reverse($str) {
        $arr = str_split($str);
        $arr_rev = array_reverse($arr);
        return implode("", $arr_rev);
    }


    function mock($from, $to) {
        echo "? ", $from, " ", $to, PHP_EOL;

        return trim(fgets(STDIN));

        // $arr = range(1, 100000);
        // $ret = 0;
        // for ($i = $from; $i < $to; $i++) {
        //     $ret += $arr[$i];
        // }
        // return $ret . PHP_EOL;

    }
