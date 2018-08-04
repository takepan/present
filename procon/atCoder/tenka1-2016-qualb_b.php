<?php
    /*
        Problem URL : http://tenka1-2016-qualb.contest.atcoder.jp/tasks/tenka1_2016_qualB_a

        Score  : 
        Result : 
        Time   : 
        Memory : 
     */

    // define('DEBUG', true);
    define('DEBUG', false);

    fscanf(STDIN, "%s", $S);

    $cntP = 0;
    $cntN = 0;
    $mmin = PHP_INT_MAX;
    $total = 0;
    $arrManu = array();
    $testNum = 4;


    // for ($z = 0; $z < pow($testNum, 2); $z++) {
    //     $test = decbin($z);
    //     $test = str_pad($test, $testNum, "0", STR_PAD_LEFT);
    //     $test = str_replace("0", "(", $test);
    //     $test = str_replace("1", ")", $test);
    //     echo $test.PHP_EOL;

    //     $S = $test;
    //     $arrManu = array();


    $arrS = str_split($S);
    $cntS = count($arrS);

    // 最後が(だったら強制的に)
    $tmp = 0;
    for ($z = $cntS-1; $z > 0; $z--) {
        if ($arrS[$z] == "(") {
            $tmp--;
        }
        if ($arrS[$z] == ")") {
            $tmp++;
        }
        if ($tmp < 0) {
            $arrS[$z] = ")";
            $tmp += 2;
            $arrManu[] = $z;
        }
    }
    if (DEBUG) {
        var_dump($arrManu);
        echo implode("", $arrS) . PHP_EOL;
    }
// exit;
    $arr = array();

    while (true) {
        $total = 0;
        for ($i = 0; $i < $cntS; $i++) {
            switch ($arrS[$i]) {
                case "(":
                    $total++;
                    $cntP++;
                    break;

                case ")":
                    $total--;
                    $cntN++;
                    break;
            }
            $arr[$i] = $total;
        }
        if (DEBUG) echo implode("", $arrS) . PHP_EOL;
        if (DEBUG) echo "total:{$total} min_arr: " . min($arr) . PHP_EOL;
        if ($total === 0 && min($arr) === 0) break;
        for ($i = 0; $i < $cntS; $i++) {
            if (DEBUG) echo $i . PHP_EOL;
            switch ($arrS[$i]) {
                case "(":
                    if ($total > 0 && $arr[$i-1] > 0) {
                        if (DEBUG) echo "change1\n";
                        $arrS[$i] = ")";
                        $total -= 2;
                        $arrManu[] = $i;
                        for ($j = $i; $j < $cntS; $j++) {
                            $arr[$j] -= 2;
                        }
                    }
                    break;

                case ")":
                    if (min($arr) < 0) {
                        // echo "change2\n";
                        $arrS[$i] = "(";
                        $arrManu[] = $i;
                        for ($j = $i; $j < $cntS; $j++) {
                            $arr[$j] += 2;
                        }
                        $total += 2;
                    }
                    break;
            }
        }
    }
    if (DEBUG) var_dump($arrManu);
    if (DEBUG) echo implode("", $arrS) . PHP_EOL;
    if (count($arrManu) === 0) {
        echo "0\n";
    } else {
        echo max($arrManu) + count($arrManu) . PHP_EOL;
    }

    // }