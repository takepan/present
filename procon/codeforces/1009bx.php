<?php
fscanf(STDIN, "%s", $S);
$pos0 = strrpos($S, "0");
$pos1 = strrpos($S, "1");
$pos2 = strrpos($S, "2");
var_dump($pos0);
var_dump($pos1);
var_dump($pos2);
exit;

$pos = max($pos0, $pos1);
echo $pos . PHP_EOL;
$str = substr($S, 0, $pos + 1);
$arr = str_split($str);
sort($arr);
$str2 = implode("", $arr);
$str2 .= substr($S, $pos + 1);
echo $str2;