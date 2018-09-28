<?php
fscanf(STDIN, "%s", $S);
fscanf(STDIN, "%s", $T);
$len = strlen($S);
$arrS = str_split($S);
$arrT = str_split($T);
$sumS = array();
$sumT = array();
$curS = 0;
$curT = 0;
$noFlg = false;
for ($i = 0; $i < $len; $i++) {
    $searchS = array_search($arrS[$i], $sumS);
    if ($searchS === false) {
        $curS++;
        $sumS[] = $arrS[$i];
    }
    $searchT = array_search($arrT[$i], $sumT);
    if ($searchT === false) {
        $curT++;
        $sumT[] = $arrT[$i];
    }
    if ($searchS === false) {
        if ($curS === $curT) {

        } else {
            $noFlg = true;
        }
    } else {
        if ($searchS === $searchT) {

        } else {
            $noFlg = true;
        }
    }
}
echo $noFlg ? "No" : "Yes";
