<?php
/*
    Problem URL : https://beta.atcoder.jp/contests/abc063/tasks/abc063_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */


// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%s", $S);
$arr = str_split($S);
$len = count($arr);
$m = array();
$flg = true;

for ($i = 0; $i < $len; $i++) {
    $cord = ord($arr[$i]);
    if ($m[$cord] != 0) {
        $flg = false;
    } else {
        $m[$cord]++;
    }
}

echo $flg ? "yes\n" : "no\n";
