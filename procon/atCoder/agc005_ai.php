<?php
/*
    URL    : http://agc005.contest.atcoder.jp/tasks/agc005_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
    Memo   :
    　文字列操作関数で元の$Xを縮めていくと、それだけでTLEになる。
　　　文字列を1回なめるだけで答えを出す方法を考えないといけない。
 */

fscanf(STDIN, "%s", $X);
$lenX = strlen($X);
$ans = 0;
$s = 0;

for ($i = 0; $i < $lenX; $i++) {
	if ($X[$i] == "S") {
		// Sの在庫を増やす
		$s++;
	}
	if ($X[$i] == "T") {
		if ($s == 0) {
			// もし直近のSがなければ不良在庫として溜まることが確定
			$ans++;
		} else {
			// 直近のSを消費
			$s--;
		}
	}
}

// echo $W . PHP_EOL;
echo ($ans * 2) . PHP_EOL;
