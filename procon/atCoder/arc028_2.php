<?php
    /*
        Problem URL : http://arc028.contest.atcoder.jp/tasks/arc028_2

        Score  : 40
        Result : TLE
        Time   : - ms
        Memory : - KB
     */

    fscanf(STDIN, "%d %d\n", $N, $K);
    $X = trim(fgets(STDIN));
    $arrX = explode(" ", $X);
    $arr = array();
    $lenX = count($arrX);
    $cnt = 0;

    foreach ($arrX as $key => $val) {
        $key2 = $key + 1;
        $arr["k{$key2}"] = $val;
        $cnt++;
        asort($arr);
        // var_dump($arr);
        if ($cnt >= $K) {
            // echo "RRR=";
            // echo $arr["k{$K}"];
            $ans = key(array_slice($arr, $K-1, 1, true));
            echo substr($ans, 1);
            echo PHP_EOL;
        }
    }
