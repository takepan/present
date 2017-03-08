<?php
/*
    Problem URL : http://abc055.contest.atcoder.jp/tasks/abc055_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d ", $N);

echo ($N * 800 - floor($N / 15) * 200) . PHP_EOL;
