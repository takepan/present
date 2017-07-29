<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
$cnt = count($a);
$total = array_sum($a);
// echo "total: " . $total . PHP_EOL;
$sum = 0;
$ans = PHP_INT_MAX;

for ($i = 0; $i < $cnt - 1; $i++) {
    
    $sum += $a[$i];
    $rest = $total - $sum;
    // echo $sum . " " . $rest . "\n";
    $ans = min($ans, abs($sum - $rest));
}
echo $ans . PHP_EOL;
