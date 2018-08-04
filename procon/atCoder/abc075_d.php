<?php

$arrX = array();
$arrY = array();
$posX = array();
$posY = array();
fscanf(STDIN, "%d %d", $N, $K);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $x[$i], $y[$i]);
    $arrX[$x[$i]]++;
    $arrY[$y[$i]]++;
}
ksort($arrX);
ksort($arrY);

$posX = array_keys($arrX);
$posY = array_keys($arrY);

$idxX = array_flip($posX);
$idxY = array_flip($posY);

$mapXY = array(array());
for ($i = 0; $i < $N; $i++) {
    $xx = $idxX[$x[$i]];
    $yy = $idxY[$y[$i]];
    $mapXY[$xx][$yy]++;
}

for ($x = 0; $x < count($idxX); $x++) {
    for ($y = 0; $y < count($idxY); $y++) {
        $mapXY[$x][$y] = $mapXY[$x-1][$y] + $mapXY[$x][$y-1] - $mapXY[$x-1][$y-1] + $mapXY[$x][$y];
    }
}

$ans = PHP_INT_MAX;

for ($x1 = 0  ; $x1 < count($idxX); $x1++) {
for ($x2 = $x1; $x2 < count($idxX); $x2++) {
for ($y1 = 0  ; $y1 < count($idxY); $y1++) {
for ($y2 = $y1; $y2 < count($idxY); $y2++) {
    $posX1 = $posX[$x1];
    $posX2 = $posX[$x2];
    $posY1 = $posY[$y1];
    $posY2 = $posY[$y2];
    $numXY = $mapXY[$x2][$y2] - $mapXY[$x1-1][$y2] - $mapXY[$x2][$y1-1] + $mapXY[$x1-1][$y1-1];
    $width = max(1, $posX2 - $posX1);
    $height = max(1, $posY2 - $posY1);
    if ($numXY >= $K) {
        $ans = min($ans, $width * $height);
    }
}    
}    
}    
}

echo $ans . PHP_EOL;
