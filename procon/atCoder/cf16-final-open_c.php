<?php
/*
    http://cf16-final-open.contest.atcoder.jp/tasks/cf16-final-open_c

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$arrL = array();
$arrOK = array();
$arrDone = array();
$arrStack = array();

fscanf(STDIN, "%d %d", $N, $M);
for ($i = 1; $i <= $N; $i++) {
	$L[$i] = explode(" ", trim(fgets(STDIN)));
	$K[$i] = array_shift($L[$i]);
	foreach ($L[$i] as $lang) {
		$arrL[$lang][] = $i;
	}
}
if (DEBUG) var_dump($K);
if (DEBUG) var_dump($L);
if (DEBUG) var_dump($arrL);
$arrStack = $L[1];
$arrOK = array(1);
if (DEBUG) var_dump($arrStack);
while (count($arrStack) > 0) {
	$pickup = array_shift($arrStack);
	if (DEBUG) echo "pickup is {$pickup}\n";
	// 処理済言語を増やす
	$arrDone[] = $pickup;
	foreach ($arrL[$pickup] as $person) {
		if (DEBUG) echo "person NO is {$person}\n";
		if (in_array($person, $arrOK)) {

		} else {
			$arrOK[] = $person;
			foreach ($L[$person] as $newLang) {
				if (in_array($newLang, $arrDone)) {

				} else {
					if (in_array($newLang, $arrStack)) {
					} else {
						$arrStack[] = $newLang;
					}
				}
			}
		}
	}
}
if (DEBUG) echo "ARROK\n";
if (DEBUG) var_dump($arrOK);

if ($N == count($arrOK)) {
	echo "YES\n";
} else {
	echo "NO\n";
}
