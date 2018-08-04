<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

$arrS = $arrL = array();
$reduce = 0;

fscanf(STDIN, "%d %d", $N, $C);
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d", $L);
    if ($L <= ($C - 1) / 2) {
        $arrS[] = $L;
    } else {
        $arrL[] = $L;
    }
}
sort($arrL);
rsort($arrS);

if (DEBUG) var_dump($arrL);
if (DEBUG) var_dump($arrS);

if (count($arrL) > 0) {
    while($lngS = array_pop($arrS)) {
        if (DEBUG) echo "S:{$lngS}\n";
        $flg = false;
        while($lngL = array_pop($arrL)) {
            $flg = true;
            if (DEBUG) echo "L:{$lngL} S:{$lngS}\n";
            if ($lngL + $lngS < $C) {
                if (DEBUG) echo "L:{$lngL} S:{$lngS} OK\n";
                $reduce++;
                break;
            }
        }
        if (DEBUG) echo "length:" . count($arrL) . PHP_EOL;
        if (count($arrL) == 0) break;
    }    
}
if (DEBUG) var_dump($arrS);
if (DEBUG) echo $reduce . PHP_EOL;
$reduce += floor(count($arrS) / 2);
if (DEBUG) echo $reduce . PHP_EOL;

echo ($N - $reduce) . PHP_EOL;

// rollbar faultline
// json->fluentd
// productionではdeprecatedは無視
// whoops(WEB+DB 96)