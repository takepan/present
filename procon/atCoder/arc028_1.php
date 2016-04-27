<?php
    /*
        Problem URL : http://arc028.contest.atcoder.jp/tasks/arc028_1

        Score  : 100
        Result : AC
        Time   : 50 ms
        Memory : 3716 KB
     */

    $arr = array();
    $cnt = 0;

    $fp = fopen('php://stdin', 'r+');
    list($N, $arr[0], $arr[1]) = explode(' ', trim(fgets($fp)));
    while ($N > 0) {
        $turn = $cnt % 2;
        $N -= $arr[$turn];
        $cnt++;
        // echo $N . PHP_EOL;
    }

    echo ($cnt % 2 == 0) ? "Bug\n" : "Ant\n";
