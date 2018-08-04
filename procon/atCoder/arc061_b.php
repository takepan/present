<?php
/*
    Problem URL : http://arc061.contest.atcoder.jp/tasks/arc061_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

fscanf(STDIN, "%d %d %d", $H, $W, $N);
$total = ($H - 2) * ($W - 2);
$m = array(array());
$s = array_pad(array(), 10, 0);
// $s = array(0 => $total);
// $s[0] = $total;
for ($i = 0; $i < $N; $i++) {
	list($a, $b) = explode(" ", trim(fgets(STDIN)));s
	$y_s = max(1, $a-1);
	$y_e = min($a+1, $H);
	$x_s = max(1, $b-1);
	$x_e = min($b+1, $W);
	// echo "{$x_s} {$x_e} {$y_s} {$y_e}\n";
	for ($x = $x_s; $x <= $x_e; $x++) {
		for ($y = $y_s; $y <= $y_e; $y++) {
			// echo $x . " " . $y . PHP_EOL;
			$m[$x][$y]++;
		}
	}
}
foreach ($m as $x => $v) {
	if ($x == 1 || $x == $W) continue;
	foreach ($v as $y => $val) {
		if ($y == 1 || $y == $H) continue;
		$s[$val]++;
	}
}
$s[0] = $total - array_sum($s);
for ($i = 0; $i <= 9; $i++) {
	// echo $i . " " . $s[$i] . PHP_EOL;
	echo $s[$i] . PHP_EOL;
}