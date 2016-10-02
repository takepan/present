<?php
/*
    URL    : http://kupc2016.contest.atcoder.jp/tasks/kupc2016_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$ans = 0;
$arrI = array();
$arrExam = array();
$tmpExam = array();

fscanf(STDIN, "%d %d", $N, $K);
for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%s", $P);
	$tmpP = str_split($P);
	$arrI[$tmpP[0]]++;
}

while(true) {
	// sleep(1);
	arsort($arrI);
	// var_dump($arrI);
	$arrIkey = array_keys($arrI);
	$cntI = count($arrI);
	if ($cntI < $K) break;
	for ($i = 0; $i < $K; $i++) {
		// echo $arrIkey[$i] . PHP_EOL;
		if ($arrI[$arrIkey[$i]] > 0) {
			$arrI[$arrIkey[$i]]--;
		} else {
			break;
		}
		if ($arrI[$arrIkey[$i]] == 0) {
			unset($arrI[$arrIkey[$i]]);
		}
	}
	$ans++;
}


echo $ans . PHP_EOL;