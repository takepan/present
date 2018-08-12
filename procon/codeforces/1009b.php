<?php
fscanf(STDIN, "%s", $S);
$cnt1 = substr_count($S, "1");
$S = str_replace("1", "", $S);
// echo $S . PHP_EOL;
preg_match("/(^0*)/", $S, $reg);
$first0 = strlen($reg[1]);
$ans = str_repeat("0", $first0) . str_repeat("1", $cnt1) . substr($S, $first0);
echo $ans;
