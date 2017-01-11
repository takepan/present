<?php
$len = 1000000;
$strOther = "01346789";

// twice
$per25 = 30;

$per_Q = 30;
$other = 10;

$loc0 = 0;
$loc2 = $loc0 + $per25;
$loc5 = $loc2 + $per25;
$locQ = $loc5 + $per_Q;
$locO = $locQ + $other;

$output = "";
for ($i = 0; $i < $len; $i++) {
    $num = mt_rand($loc0, $locO);
    if ($num < $loc2) {
        $output .= "2";
    } elseif ($num < $loc5) {
        $output .= "5";
    } elseif ($num < $locQ) {
        $output .= "?";
    } else {
        $output .= $strOther[mt_rand(0, strlen($strOther))];
    }
}

// echo $output;

$fp = fopen(__DIR__ . "/dwacon2017-prelims_b_gen.dat", "w+");
fputs($fp, $output);
fclose($fp);
