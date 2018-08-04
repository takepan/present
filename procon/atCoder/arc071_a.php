<?php
/*
    Problem URL : http://arc071.contest.atcoder.jp/tasks/arc071_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$ans = "";

fscanf(STDIN, "%d", $n);

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%s", $S[$i]);
    for ($j = 0; $j < strlen($S[$i]); $j++) {
        $s = substr($S[$i], $j, 1);
        $sum[$i][$s]++;
    }
}
// var_dump($sum);
// exit;

$ch = ord('a');
for ($i = 0; $i < 26; $i++) {
    // echo "===" . chr($ch + $i) . PHP_EOL;
    for ($j = 0; $j < $n; $j++) {
        // echo "* {$j} " . chr($ch + $i) . PHP_EOL;
        if ($j == 0) {
            $mmin = $sum[$j][chr($ch + $i)];
            // echo $mmin . PHP_EOL;
        } else {
            $mmin = min($mmin, $sum[$j][chr($ch + $i)]);
        }
        // echo "mmin = " . $mmin . PHP_EOL;
    }
    $ans .= str_repeat(chr($ch + $i), $mmin);
}

echo $ans . PHP_EOL;
