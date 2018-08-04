<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$map = array(array());
fscanf(STDIN, "%d %d", $H, $W);
for ($i = 1; $i <= $H; $i++) {
    fscanf(STDIN, "%s", $S);
    $map[$i] = str_split(" " . $S);
}
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