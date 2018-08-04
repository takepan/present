<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%s", $S);

$notX = str_replace("x", "", $S);
if (DEBUG) echo "$notX\n";
$lenX = strlen($notX);
for ($i = 0; $i < $lenX; $i++) {
    if ($notX[$i] != $notX[$lenX-1-$i]) {
        exit("-1\n");
    }
}

// $halfX = substr($notX, 0, ceil($lenX / 2));
// echo $halfX;
// exit;

// echo "SURVIVE\n";

$ans = 0;
$targetL = 0;
$targetR = strlen($S)-1;
while(true) {
    $lenS = strlen($S);
    $sideL = $S[$targetL];
    $sideR = $S[$targetR];
    // echo "BEFORE : {$S}\n";
    if ($sideL != $sideR) {
        // echo "$target = {$sideL} {$sideR}\n";
        $ans++;
        if ($sideL != "x") {
            // echo "CASE L\n";
            // $S = substr($S, 0, $lenS-$target) . "x" . substr($S, $lenS-$target);
            $targetL++;
        }
        if ($sideR != "x") {
            // echo "CASE R\n";
            // $S = substr($S, 0, $target) . "x" . substr($S, $target);
            $targetR--;
        }

    } else {
        $target++;
        if ($target > floor($lenS / 2)) break;
    }
    // echo "AFTER : {$S}\n";
    // echo "ANSWER: {$ans}\n";
    // sleep(1);
}

echo $ans . PHP_EOL;
