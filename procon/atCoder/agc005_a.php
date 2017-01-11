<?php
/*
    URL    : http://agc005.contest.atcoder.jp/tasks/agc005_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%s", $X);
$X = str_split($X);
$lenX = count($X);
// echo $X . PHP_EOL;
$W = "";

while($X) {
	$moji = array_shift($X);
	if ($moji === "T" && $W[count($W)-1] === "S") {
		array_pop($W);
	} else {
		$W[] = $moji;
	}
}

// echo $W . PHP_EOL;
echo count($W) . PHP_EOL;
