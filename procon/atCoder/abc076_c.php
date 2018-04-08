<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 'Off');

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $S);
fscanf(STDIN, "%s", $T);

$arrS = str_split($S);
$arrT = str_split($T);

for ($i = count($arrS) - count($arrT); $i >= 0; $i--) {
    if (DEBUG) echo "i:{$i}\n";
    $tmpS = $arrS;
    $tmpT = $arrT;
    $flg = true;
    for ($j = 0; $j < count($arrT); $j++) {
        if (DEBUG) echo "{$i} {$j} {$arrT[$j]} {$arrS[$i + $j]}\n";
        if ($arrT[$j] == $arrS[$i + $j] || "?" == $arrS[$i + $j]) {

        } else {
            $flg = false;
        }
    }
    if (DEBUG) var_dump($flg);
    if ($flg) {
        $newStr = substr($S, 0, $i);
        $newStr .= $T;
        $newStr .= substr($S, strlen($newStr));     
        $newStr = str_replace("?", "a", $newStr);
        echo $newStr . PHP_EOL;
        exit;
    } else {
    }
}
echo "UNRESTORABLE\n";
