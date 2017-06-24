<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE);

define('DEBUG', true);
// define('DEBUG', false);

define('MOD', pow(10, 9) + 7);

fscanf(STDIN, "%d", $N);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $x[$i], $y[$i]);
}

asort($x);
asort($y);

var_dump($x);
var_dump($y);
$xk = array_keys($x);
$xv = array_values($x);
$yk = array_keys($y);
$yv = array_values($y);

for ($i = 0; $i < $N - 1; $i++) {
    $p = $xk[$i] . "-" . $xk[$i+1];
    $d = $xv[$i+1] - $xv[$i];
    $xx[$p] = $d;
}
for ($i = 0; $i < $N - 1; $i++) {
    $p = $yk[$i] . "-" . $yk[$i+1];
    $d = $yv[$i+1] - $yv[$i];
    $yy[$p] = $d;
}

asort($xx);
asort($yy);

var_dump($xx);
var_dump($yy);

$rest = $N - 1;
$curX = 0;
$curY = 0;

while($rest > 0) {
    if (!isset($tmpXK)) {
        list($tmpXK, $tmpXV) = each($xx);
    }
    if (!isset($tmpYK)) {
        list($tmpYK, $tmpYV) = each($yy);
    }
    if (DEBUG) echo "XV: " . $tmpXV . " YK:" . $tmpYV . PHP_EOL;
    if ($tmpXV > $tmpYV) {
        list($posY1, $posY2) = explode("-", $tmpYK);
        echo "BUILD YK : {$tmpYK}\n";
        unset($tmpYK);
        $n1 = isset($flg[$posY1]);
        $n2 = isset($flg[$posY2]);

        if (!isset($flg[$posY1]) || !isset($flg[$posY2])) {
            $ans += $tmpYV;
            $rest--;
            echo "***OK\n";
            if (!isset($flg[$posY1])) {
                $flg[$posY1] = 1;
                // $rest--;
            }
            if (!isset($flg[$posY2])) {
                $flg[$posY2] = 1;
                // $rest--;
            }
        }
    } else {
        list($posX1, $posX2) = explode("-", $tmpXK);
        echo "BUILD XK : {$tmpXK}\n";
        unset($tmpXK);
        if (!isset($flg[$posX1]) || !isset($flg[$posX2])) {
            $ans += $tmpXV;
            $rest--;
            echo "***OK\n";
            if (!isset($flg[$posX1])) {
                $flg[$posX1] = 1;
                // $rest--;
            }
            if (!isset($flg[$posX2])) {
                $flg[$posX2] = 1;
                // $rest--;
            }
        }
    }
    // sleep(1);

    for ($i = 0; $i < $N; $i++) {
        if (isset($flg[$i])) {
            echo "o ";
        } else {
            echo "x ";
        }
    }
    echo PHP_EOL;
    echo "count: " . $tmpXK . "-" . $tmpYK . PHP_EOL;

    echo $rest . PHP_EOL;
}

echo $ans . PHP_EOL;
