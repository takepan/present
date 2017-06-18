<?php
/*
    Problem URL : http://abc060.contest.atcoder.jp/tasks/abc060_d

    Score  :
    Result :
    Time   : ms
    Memory : KB
3,879483
43,608177
3
1;Maison de la Prevention Sante;6 rue Maguelone 340000 Montpellier;;3,87952263361082;43,6071285339217
2;Hotel de Ville;1 place Georges Freche 34267 Montpellier;;3,89652239197876;43,5987299452849
3;Zoo de Lunaret;50 avenue Agropolis 34090 Mtp;;3,87388031141133;43,6395872778854
 */

// echo cos(90 / (180 / M_PI));
// exit;

// define('DEBUG', true);
define('DEBUG', false);

$ans = null;
$distance = null;

fscanf(STDIN, "%s", $lng);
$lng = str_replace(",", ".", $lng);
fscanf(STDIN, "%s", $lat);
$lat = str_replace(",", ".", $lat);
fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    $str = trim(fgets(STDIN));
    // echo $str . PHP_EOL;
    list($num, $loc, $loc2, $dum, $lng1, $lat1) = explode(";", $str);
    $lng1 = str_replace(",", ".", $lng1);
    $lat1 = str_replace(",", ".", $lat1);
    // echo "{$lng1} {$lat1}\n";
    $dist = dist($lng1, $lng, $lat1, $lat);
    if (is_null($ans)) {
        $ans = $loc;
        $distance = $dist;
    } else {
        if ($distance > $dist) {
            $ans = $loc;
            $distance = $dist;
        }
    }
    if (DEBUG) echo $dist . PHP_EOL;
}
echo $ans . PHP_EOL;

function dist($lngB, $lngA, $latB, $latA) {
    $x = ($lngB - $lngA) * cos((($latA + $latB) / 2) / (180 / M_PI));
    $y = ($latB - $latA);
    $d = sqrt($x * $x + $y * $y) * 6371;
    return $d;
}