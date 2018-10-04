<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $n);
fscanf(STDIN, "%s", $a);

$array = str_split($a);
$sum = array_sum($array);

$flgLucky = false;

for ($i = 2; $i <= $n; $i++) {
    // echo $i . PHP_EOL;
    if ($sum % $i === 0) {
        $unit = $sum / $i;

        $cnt = 0;
        for ($j = 0; $j < $n; $j++) {
            $cnt += $array[$j];
            if ($cnt === $unit) {
                $cnt = 0;
            } elseif ($cnt > $unit) {
                break;
            }
            if ($j === $n - 1) {
                $flgLucky = true;
            }
        }
    }
    // var_dump($flgLucky);
}

echo $flgLucky ? "YES" : "NO";
