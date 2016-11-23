<?php
/*
    Problem URL : http://arc060.contest.atcoder.jp/tasks/arc060_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d", $N, $A);
$x = explode(" ", trim(fgets(STDIN)));
array_unshift($x, 0);
// var_dump($x);
fscanf(STDIN, "%d", $L);
fscanf(STDIN, "%d", $Q);

for ($i = 0; $i < $Q; $i++) {
    fscanf(STDIN, "%d %d", $aa, $bb);
    $ans = 0;
    // echo "==============\n";
    if ($aa < $bb) {
        // echo "type A\n";
        $pos = $x[$aa];
        // echo "init pos:$pos \n";
        // echo $pos . PHP_EOL;
        for ($j = $aa; $j <= $bb; $j++) {
            if (abs($x[$j] - $pos) <= $L) {

            } else {
                $ans++;
                $pos = $x[$j - 1];
            }
            // echo $pos . PHP_EOL;
        }
        $ans++;
        echo $ans . PHP_EOL;

    } else {
        // echo "type B\n";
        $pos = $x[$aa];
        for ($j = $aa; $j >= $bb; $j--) {
            if (abs($x[$j] - $pos) <= $L) {

            } else {
                $ans++;
                $pos = $x[$j + 1];
            }
        }
        $ans++;
        echo $ans . PHP_EOL;

    }
}
