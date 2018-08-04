<?php
/*
    Problem URL : http://arc007.contest.atcoder.jp/tasks/arc007_1

    Score  : 100
    Result : AC
    Time   : 53 ms
    Memory : 3832 KB
 */

fscanf(STDIN, "%s", $X);
fscanf(STDIN, "%s", $s);

echo str_replace(str_split($X), array_pad(array(), strlen($X), null), $s) . PHP_EOL;
