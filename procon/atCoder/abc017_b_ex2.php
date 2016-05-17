<?php
/*
    Problem URL : https://abc017.contest.atcoder.jp/tasks/abc017_b

    Score  :
    Result :
    Time   :  ms
    Memory :  KB
 */

$fp = fopen("php://stdin", "r+");
$X = trim(fgets($fp));
$arr = array("ch", "o", "k", "u");

while ($X) {
    $Xbase = $X;
    foreach ($arr as $w) {
        if (substr($X, -strlen($w)) == $w) {
            $X = substr($X, 0, strlen($X) - strlen($w));
        }
    }
    // ループの前と変わってなければNO
    if ($Xbase === $X) {
        exit("NO\n");
    }
}

echo "YES\n";
