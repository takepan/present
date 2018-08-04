<?php
/*
    Problem URL : http://arc064.contest.atcoder.jp/tasks/arc064_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */
define('DEBUG', true);
// define('DEBUG', false);

fscanf(STDIN, "%s", $s);
$len = strlen($s);
$dist = array();
$ad = array();
$ans = 0;
$blank = 0;
$moji = array("Second", "First");

for ($i = 0; $i < $len; $i++) {
    if (!isset($ad[$s[$i]])) {

    } else {
        $dist[$i] = $i - $ad[$s[$i]];
    }
    $ad[$s[$i]] = $i;
}

$ad = array();

for ($i = len - 1; $i >= 0; $i--) {
    if (!isset($ad[$s[$i]])) {

    } else {
        $dist[$i] = min($dist[$i], $ad[$s[$i]] - $i);
    }
    $ad[$s[$i]] = $i;
}

for ($i = 0; $i < $len; $i++) {
    // echo "i:{$i} dist:{$dist[$i]}\n";
    if (!isset($dist[$i])) {
        $blank++;
    } else {
        if ($dist[$i] > 2) {
            $ans++;
        }
    }
}
if ($blank > 2) {
    $ans += $blank - 2;
}

if (DEBUG) echo "moves: {$ans}\n";

echo $moji[$ans % 2] . PHP_EOL;
