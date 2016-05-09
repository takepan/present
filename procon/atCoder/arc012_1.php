<?php
    /*
        Problem URL : http://arc012.contest.atcoder.jp/tasks/arc012_1

        Score  : 100
        Result : AC
        Time   : 55 ms
        Memory : 3900 KB
     */

    $arr = array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
    fscanf(STDIN, "%s", $day);

    if (array_search($day, $arr) === 0) {
        echo '0' . PHP_EOL;
    } else {
        $arr = array_flip($arr);
        echo (6- $arr[$day]) . PHP_EOL;
    }
