<?php
fscanf(STDIN, "%s", $n);
echo ex($n, "1", "9");

function ex($str, $a, $b) {
    if ($a != "1" && $b != "1") {
        $x = "1";
    }
    if ($a != "2" && $b != "2") {
        $x = "2";
    }
    if ($a != "3" && $b != "3") {
        $x = "3";
    }
    $str = str_replace($a, $x, $str);
    $str = str_replace($b, $a, $str);
    $str = str_replace($x, $b, $str);
    return $str;
}
