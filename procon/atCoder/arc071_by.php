<?php
/*
    Problem URL : http://arc071.contest.atcoder.jp/tasks/arc071_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$sx = $sy = 4;
$sx = 4;
$sy = 5;

for ($x1 = 0; $x1 < $sx; $x1++) {
    for ($x2 = $x1; $x2 < $sx; $x2++) {
        for ($y1 = 0; $y1 < $sy; $y1++) {
            for ($y2 = $y1; $y2 < $sy; $y2++) {
                for ($x = $x1; $x <= $x2; $x++) {
                    for ($y = $y1; $y <= $y2; $y++) {
                        $sum[$x][$y]++;
                    }
                }
            }
        }
    }
}

for ($x = 0; $x < $sx; $x++) {
    for ($y = 0; $y < $sy; $y++) {
        echo $sum[$x][$y]. " ";
    }
    echo PHP_EOL;
}
exit;
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
