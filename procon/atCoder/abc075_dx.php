<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$map = array(array());
$arrX = array();
$arrY = array();
$posX = array();
$sumX = array();
$posY = array();
$sumY = array();
fscanf(STDIN, "%d %d", $N, $K);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $x, $y);
    $arrX[$x]++;
    $arrY[$y]++;
}
asort($arrX);
// var_dump($arrX);
// exit;
asort($arrY);

$cur = 0;
foreach ($arrX as $key => $val) {
    $posX[] = $key;
    $sumX[] = $val;
}
foreach ($posX as $key => $val) {
    echo "X:{$posX[$key]} {$sumX[$key]}\n";
}
foreach ($arrY as $key => $val) {
    $cur += $val;
    $posY[] = $key;
    $sumY[] = $val;
}
foreach ($posY as $key => $val) {
    echo "Y:{$posY[$key]} {$sumY[$key]}\n";
}
$cntX = count($arrX);
$cntY = count($arrY);

echo "cntX:{$cntX}\n";
echo "cntY:{$cntY}\n";

$sumXY = array(array());
var_dump($sumX);
var_dump($sumY);

for ($x = 0; $x < $cntX; $x++) {
    for ($y = 0; $y < $cntY; $y++) {
        $cur1 = $sumXY[$x-1][$y] + ($sumX[$x] + $sumY[$y]) / 2;
        $cur2 = $sumXY[$x][$y-1] + ($sumX[$x] + $sumY[$y]) / 2;
        if ($cur1 != $cur2) {
            exit("EERRR {$cur1} {$cur2}");
        } else {
            $sumXY[$x][$y] = $cur1;
        }
    }
}
var_dump($sumXY);
exit;

for ($x1 = 0; $x1 < $cntX; $x1++) {
    for ($x2 = $x1; $x2 < $cntX; $x2++) {
        for ($y1 = 0; $y1 < $cntY; $y1++) {
            for ($y2 = $y1; $y2 < $cntY; $y2++) {
                if ($x1 == $x2) {
                    $w = 1;
                    $numX = $sumX[$x1] - $sumX[$x1-1];          
                } else {
                    $w = $posX[$x2] - $posX[$x1];
                    $numX = $sumX[$x2] - $sumX[$x1-1]; 
                }
                if ($y1 == $y2) {
                    $h = 1;        
                    $numY = $sumY[$y1] - $sumY[$y1-1]; 
                } else {
                    $h = $posY[$y2] - $posY[$y1];
                    $numY = $sumY[$y2] - $sumY[$y1-1]; 
                }
                $numZ = $numX + $numY;

                echo "$x1 $x2 $y1 $y2 w:$w h:$h numX:{$numX} numY:{$numY} numZ:{$numZ}\n";

            }
        }
    }
}


// var_dump($arrX);
// var_dump($arrY);



// var_dump($map);

for ($i = 1; $i <= $H; $i++) {
    for ($j = 1; $j <= $W; $j++) {
        $x = 0;
        if ($map[$i][$j] == ".") {
            if ($map[$i-1][$j-1] == "#") {
                $x++;
            }
            if ($map[$i-1][$j  ] == "#") {
                $x++;
            }
            if ($map[$i-1][$j+1] == "#") {
                $x++;
            }
            if ($map[$i  ][$j-1] == "#") {
                $x++;
            }
            if ($map[$i  ][$j+1] == "#") {
                $x++;
            }
            if ($map[$i+1][$j-1] == "#") {
                $x++;
            }
            if ($map[$i+1][$j  ] == "#") {
                $x++;
            }
            if ($map[$i+1][$j+1] == "#") {
                $x++;
            }
            echo $x;
        } else {
            echo $map[$i][$j];
        }
    }
    echo PHP_EOL;
}