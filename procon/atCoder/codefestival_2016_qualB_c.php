<?php

$arr = array();
fscanf(STDIN, "%d %d", $W, $H);
$ans = 0;

$WW = $W + 1;
$HH = $H + 1;

for ($i = 0; $i < $W; $i++) {
	$key = "W_" . strval($i);
	fscanf(STDIN, "%d", $arr[$key]);
}

for ($i = 0; $i < $H; $i++) {
	$key = "H_" . strval($i);
	fscanf(STDIN, "%d", $arr[$key]);
}
asort($arr);
foreach ($arr as $key => $val) {
	$WH = $key[0];
	if ($WH == "W") {
		$kazu = $HH;
		$WW--;
	} else {
		$kazu = $WW;
		$HH--;
	}
	$ans += $val * $kazu;
}
echo $ans . PHP_EOL;
