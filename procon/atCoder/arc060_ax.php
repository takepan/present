<?php
/*
    Problem URL : http://arc060.contest.atcoder.jp/tasks/arc060_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('memory_limit', -1);

$ans = 0;

fscanf(STDIN, "%d %d", $N, $A);
$x = explode(" ", trim(fgets(STDIN)));

$arr = array();

for ($i = 0; $i < $N; $i++) {
	$diff = $x[$i] - $A;
	$arr[$i][$diff] = 1;
	if ($i != 0) {
		foreach ($arr[$i-1] as $key => $val) {
			$arr[$i][$key] += $arr[$i-1][$key];
			$arr[$i][$key+$diff] += $arr[$i-1][$key];			
		}
	}

	// echo "turn {$i}\n";
	// foreach ($arr[$i] as $key => $val) {
	// 	echo "{$key} {$val}\n";
	// }

}

echo isset($arr[$N-1][0]) ? $arr[$N-1][0] : 0 ;
echo PHP_EOL;

echo memory_get_peak_usage();
echo PHP_EOL;