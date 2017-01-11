<?php
/*
    Problem URL : http://abc047.contest.atcoder.jp/tasks/abc047_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $W, $H, $N);

$x_min = 0;
$x_max = $W;
$y_min = 0;
$y_max = $H;

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d %d", $x, $y, $a);
    switch ($a) {
        case "1":
            $x_min = max($x_min, $x);
            break;

        case "2":
            $x_max = min($x_max, $x);
            break;

        case "3":
            $y_min = max($y_min, $y);
            break;

        case "4":
            $y_max = min($y_max, $y);
            break;
    }
}

$width = 0;
$height = 0;
if ($x_max > $x_min) {
    $width = $x_max - $x_min;   
}
if ($y_max > $y_min) {
    $height = $y_max - $y_min;   
}

echo ($width * $height) . PHP_EOL;
