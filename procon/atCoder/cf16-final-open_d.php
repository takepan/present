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

$arrNum = array();
$arrMod = array();
$ans = 0;

fscanf(STDIN, "%d %d", $N, $M);
$X = explode(" ", trim(fgets(STDIN)));
foreach ($X as $num) {
	$arrNum[$num]++;
	$mod = $num % $M;
	$sumMod[$mod]++;
	$arrMod[$mod][$num]++;
}
if (DEBUG) var_dump($arrMod);

// あまりがM/2は融通が利く
// 同じ数で2枚でMにならないのが最後

// $flag = true;
// while ($flag) {
// 	$flag = false;
	for ($mm = 0; $mm <= $M / 2; $mm++) {
		if (DEBUG) echo "******mm : {$mm}\n";
		if ($mm == 0 || ($mm == $M / 2)) {
			$ans += floor(count($arrMod[$mm]) / 2);
			if (DEBUG) echo "ans=" . $ans . PHP_EOL;
		} else {
			$mo = $M - $mm;

			if (DEBUG) echo "mm:{$mm} mo:{$mo}\n";
			$flag2 = true;
			// 差が2なくなるまでやる
			while($flag2) {
				$flag2 = false;
				if (DEBUG) echo "moCNT:{$sumMod[$mo]} mmCNT:{$sumMod[$mm]}\n";
				if (abs($sumMod[$mo] - $sumMod[$mm]) >= 2) {
					if ($sumMod[$mo] - $sumMod[$mm] >= 2) {
						foreach ($arrMod[$mo] as $key => $val) {
							if (DEBUG) echo "{$key} -> {$val}\n";
							if ($val >= 2) {
								if (DEBUG) echo "hiita\n";
								$flag2 = true;
								$arrMod[$mo][$key] -= 2;
								$sumMod[$mo] -= 2;
								$ans++;
							}
						}
					}
					if ($sumMod[$mm] - $sumMod[$mo] >= 2) {
						if (DEBUG) echo "B";
						foreach ($arrMod[$mm] as $key => $val) {
							if (DEBUG) echo "{$key} -> {$val}\n";
							if ($val >= 2) {
								if (DEBUG) echo "hiita\n";
								$flag2 = true;
								$arrMod[$mm][$key] -= 2;
								$sumMod[$mm] -= 2;
								$ans++;
							}
						}
					}
				}
			}
			$ans += min($sumMod[$mm], $sumMod[$mo]);
			if (DEBUG) echo "ans=" . $ans . PHP_EOL;

		}
	}




// }
if (DEBUG) echo "ANS=" . $ans . PHP_EOL;
echo $ans . PHP_EOL;