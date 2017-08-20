<?php

// define('DEBUG', true);
define('DEBUG', false);

$target = "a";

fscanf(STDIN, "%s", $S);

while(true) {
    $stre = implode(".*", str_split($target));
    // echo $stre . PHP_EOL;
    if (!preg_match("/{$stre}/", $S)) {
        echo $target . PHP_EOL;
        exit;
    }
    $target = nxt($target);
}

function nxt($str) {
    if (preg_match("/^z+$/", $str)) {
        return str_repeat("a", strlen($str) + 1);
    }
    $len = strlen($str);
    $arr = str_split($str);
    for ($i = $len - 1; $i >= 0; $i--) {
        if ($arr[$i] != 'z') {
            $arr[$i] = chr(ord($arr[$i]) + 1);
            return implode("", $arr);
        } else {
            $arr[$i] = "a";
        }
    }
}
