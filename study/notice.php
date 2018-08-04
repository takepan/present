<?php
// 数字の文字列は途中まで一緒なだけで同値と判定される模様。
// === であれば正常に判定される。

$s1 = "31415926535897932354650410";
$s2 = "31415926535897932384626433";

$s1 = "abcdefghijklmnopqrSTUVWXYZ";
$s2 = "abcdefghijklmnopqrstuvwxyz";

$s1 = "98765432109876543210987654";
$s2 = "98765432109876543001234567";

if ($s1 == $s2) {
    echo "same\n";
} else {
    echo "different\n";
}
