<?php
/*
    Problem URL : http://arc005.contest.atcoder.jp/tasks/arc005_1

    Score  : 100
    Result : AC
    Time   : 71 ms
    Memory : 4196 KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
$w = explode(" ", rtrim(trim(fgets(STDIN)), '.'));
// var_dump($w);
$arr = array_count_values($w);
echo $arr['TAKAHASHIKUN'] + $arr['Takahashikun'] + $arr['takahashikun'] . PHP_EOL;
