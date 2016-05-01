<?php
    /*
        Problem URL : http://arc052.contest.atcoder.jp/tasks/arc052_b

        Score  : 100
        Result : AC
        Time   : 93 ms
        Memory : 3832 KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    $arr = array();

    $fp = fopen("php://stdin", "r+");
    list($N, $Q) = explode(" ", trim(fgets($fp)));
    for ($i = 0; $i < $N; $i++) {
        list($X, $R, $H) = explode(" ", trim(fgets($fp)));
        $prev = 0;
        for ($j = 1; $j <= $H; $j++) {
            $tmp = calc($R / $H * $j, $j);
            $diff = $tmp - $prev;
            $prev = $tmp;
            $arr[$X + $H - $j] += $diff;
        }
    }

    for ($i = 0; $i < $Q; $i++) {
        list($A, $B) = explode(" ", trim(fgets($fp)));
        $answer = 0;
        for ($j = $A; $j < $B; $j++) {
            $answer += isset($arr[$j]) ? $arr[$j] : 0;
        }
        echo $answer . PHP_EOL;
    }

    function calc ($r, $h) {
        return M_PI * $r * $r * $h / 3;
    }