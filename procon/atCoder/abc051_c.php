<?php
/*
    Problem URL : http://abc051.contest.atcoder.jp/tasks/abc051_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d %d", $sx, $sy, $tx, $ty);

$diff_x = $tx - $sx;
$diff_y = $ty - $sy;

$ans = "";

for ($i = 0; $i < $diff_x; $i++) {
    $ans .= "R";
}
for ($i = 0; $i < $diff_y; $i++) {
    $ans .= "U";
}
$way1 = $ans;

$way2 = $way1;
$way2 = str_replace("U", "u", $way2);
$way2 = str_replace("D", "d", $way2);
$way2 = str_replace("L", "l", $way2);
$way2 = str_replace("R", "r", $way2);

$way2 = str_replace("u", "D", $way2);
$way2 = str_replace("d", "U", $way2);
$way2 = str_replace("l", "R", $way2);
$way2 = str_replace("r", "L", $way2);

$ans .= $way2;

$diff_x++;
$diff_y++;

$way3 = "";

for ($i = 0; $i < $diff_x; $i++) {
    $way3 .= "R";
}
for ($i = 0; $i < $diff_y; $i++) {
    $way3 .= "U";
}

$way4 = $way3;

$way3 = "D" . $way3 . "L";

// echo $ans . PHP_EOL;
// echo $way3 . PHP_EOL;

$way4 = str_replace("U", "u", $way4);
$way4 = str_replace("D", "d", $way4);
$way4 = str_replace("L", "l", $way4);
$way4 = str_replace("R", "r", $way4);

$way4 = str_replace("u", "D", $way4);
$way4 = str_replace("d", "U", $way4);
$way4 = str_replace("l", "R", $way4);
$way4 = str_replace("r", "L", $way4);

$way4 = "U" . $way4 . "R";
// echo $way4 . PHP_EOL;

echo $ans . $way3 . $way4 . PHP_EOL;
