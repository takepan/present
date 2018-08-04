<?php
    /*
        Problem URL : http://arc032.contest.atcoder.jp/tasks/arc032_2

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $answer = -1;
    $arr = array();
    $arr3 = array();

    $fp = fopen('php://stdin', 'r+');
    list($N, $M) = explode(' ', trim(fgets($fp)));
    for ($i = 0; $i < $N; $i++) {
        $arr[$i+1] = $i + 1;
        $arr3[$i+1] = array($i + 1);
    }

    for ($i = 0; $i < $M; $i++) {
        list($x, $y) = explode(' ', trim(fgets($fp)));

        $c1 = $arr[$x];
        $c2 = $arr[$y];
        if ($c1 == $c2) continue;

        if ($c1 > $c2) {
            $minmin = $c2;
            $maxmax = $c1;
        } else {
            $minmin = $c1;
            $maxmax = $c2;
        }

        $arr3[$minmin] = array_merge($arr3[$minmin], $arr3[$maxmax]);
        foreach ($arr3[$maxmax] as $k => $v) {
            $arr[$v] = $minmin;
        }
        unset($arr3[$maxmax]);
    }

    $answer += count($arr3);

    echo $answer . PHP_EOL;
