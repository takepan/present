<?php
/*
    Problem URL : http://arc005.contest.atcoder.jp/tasks/arc005_2

    Score  : 100
    Result : AC
    Time   : 57 ms
    Memory : 4040 KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);
define('LINES', 10);

$arrW = array(
     'R' => array('x' => 1, 'y' => 0),
     'L' => array('x' => -1, 'y' => 0),
     'U' => array('x' => 0, 'y' => -1),
     'D' => array('x' => 0, 'y' => 1),
     'RU' => array('x' => 1, 'y' => -1),
     'RD' => array('x' => 1, 'y' => 1),
     'LU' => array('x' => -1, 'y' => -1),
     'LD' => array('x' => -1, 'y' => 1),
);

fscanf(STDIN, "%d %d %s", $x, $y, $W);
for ($i = 0; $i < LINES; $i++) {
    fscanf(STDIN, "%s", $c);
    $arrTemp = str_split($c);
    $cntTemp = count($arrTemp);
    for ($j = 0; $j < $cntTemp; $j++) {
        $arrC[$j][$i] = $arrTemp[$j];
    }
}

// 1始まりのため、調整
$x--;
$y--;

$answer = "";

for ($i = 0; $i < 4; $i++) {

    $answer .= $arrC[$x][$y];

    // echo "{$x} {$y} {$arrW[$W]['x']} {$arrW[$W]['y']} {$arrC[$x][$y]}\n";

    $next_x = $x + $arrW[$W]['x'];
    $next_y = $y + $arrW[$W]['y'];

    $boolRecalc = false;

    if ($next_x < 0 || $next_x >= LINES-1) {
        // echo "turnX\n";
        $arrW[$W]['x'] *= -1;
        $boolRecalc = true;
    }
    if ($next_y < 0 || $next_y >= LINES-1) {
        // echo "turnY\n";
        $arrW[$W]['y'] *= -1;
        $boolRecalc = true;
    }

    if ($boolRecalc === true) {
        $x = $x + $arrW[$W]['x'];
        $y = $y + $arrW[$W]['y'];
    } else {
        $x = $next_x;
        $y = $next_y;
    }

}
echo $answer . PHP_EOL;
