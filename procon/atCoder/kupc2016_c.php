<?php
/*
    URL    : http://kupc2016.contest.atcoder.jp/tasks/kupc2016_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */


// echo str_pad(decbin(60), 7, "0", STR_PAD_LEFT) . PHP_EOL;
// echo str_pad(decbin(99), 7, "0", STR_PAD_LEFT) . PHP_EOL;
// echo str_pad(decbin(95), 7, "0", STR_PAD_LEFT) . PHP_EOL;
// exit;

$ans = 0;

for ($i = 0; $i < 128; $i++) {
	$mmax = 0;
	$mfac = -1;
	for ($j = 0; $j < 128; $j++) {
		$k = ($i ^ $j);
		$val = $j + $k;
		if ($mmax < $val) {
			$mk = $k;
			$mmax = $val;
			$mfac = $j;
		}
	}
	echo "i:{$i} j:{$mfac} k:{$mk} mmax:{$mmax}\n";

}
exit;

fscanf(STDIN, "%d %d %d", $N, $A, $B);
for ($i = 0; $i < $N; $i++) {
	fscanf(STDIN, "%d", $t);
	if ($t < $A || $t >= $B) {
		$ans++;
	} 
	// echo $t . " " . $A . " " . $B . " " . $ans . PHP_EOL;
}

echo $ans . PHP_EOL;