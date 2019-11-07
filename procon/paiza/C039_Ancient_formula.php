<?php
fscanf(STDIN, "%s", $E);
$a = explode("+", $E);
$ans = 0;
foreach ($a as $k) {
    $ans += num($k);
}
echo $ans;

function num($S) {
    $len = strlen($S);
    $arr = str_split($S);
    $ret = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] === "<") {
            $ret += 10;
        }
        if ($arr[$i] === "/") {
            $ret += 1;
        }
    }
    return $ret;
}

