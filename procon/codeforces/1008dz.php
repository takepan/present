<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);
define('N', pow(10, 5) + 5);

function init() {
	global $f;
	for ($i = 1; $i < N; $i++) {
		for ($j = $i; $j < N; $j += $i) {
			++$f[$j];
		}
	}
}
function count1($x, $y, $z) {
	return $x * $y * $z;
}
function count2($x, $y) {
	return ($x + $x * ($x - 1) / 2) * $y;
}
function count3($x) {
	return $x + $x * ($x - 1) + $x * ($x - 1) * ($x - 2) / 6;
}
function __gcd($a, $b) {
	if ($a == 0 || $b == 0) {
		return abs(max(abs($a), abs($b)));
	}

	$r = $a % $b;
	return ($r != 0) ? __gcd($b, $r) : abs($b);
}
init();
fscanf(STDIN, "%d", $t);
while ($t--) {
	fscanf(STDIN, "%d %d %d", $a, $b, $c);
	$ab = __gcd($a, $b);
	$bc = __gcd($b, $c);
	$ac = __gcd($a, $c);
	$abc = __gcd($ab, $c);
	$a = $f[$a];
	$b = $f[$b];
	$c = $f[$c];
	$ab = $f[$ab];
	$bc = $f[$bc];
	$ac = $f[$ac];
	$abc = $f[$abc];
	$ab -= $abc;
	$ac -= $abc;
	$bc -= $abc;
	$a -= $ab + $ac + $abc;
	$b -= $ab + $bc + $abc;
	$c -= $ac + $bc + $abc;
	$ans = count1($a, $b, $c) + count1($a, $b, $ac) + count1($a, $b, $bc) + count1($a, $b, $abc) + count1($a, $ab, $c) + count1($a, $ab, $ac) + count1($a, $ab, $bc) + count1($a, $ab, $abc) + count1($a, $bc, $c)
	 + count1($a, $bc, $ac) + count2($bc, $a) + count1($a, $bc, $abc) + count1($a, $abc, $c) + count1($a, $abc, $ac) + count2($abc, $a) + count1($ab, $b, $c) + count1($ab, $b, $ac) + count1($ab, $b, $bc)
	 + count1($ab, $b, $abc) + count2($ab, $c) + count2($ab, $ac) + count2($ab, $bc) + count2($ab, $abc) + count1($ab, $bc, $c) + count1($ab, $bc, $ac) + count2($bc, $ab) + count1($ab, $bc, $abc)
	 + count1($ab, $abc, $c) + count1($ab, $abc, $ac) + count2($abc, $ab) + count1($ac, $b, $c) + count2($ac, $b) + count1($ac, $b, $bc) + count1($ac, $b, $abc) + count1($ac, $ab, $c) + count2($ac, $ab)
	 + count1($ac, $bc, $c) + count2($ac, $bc) + count2($bc, $ac) + count1($ac, $bc, $abc) + count1($ac, $abc, $c) + count2($ac, $abc) + count2($abc, $ac) + count1($abc, $b, $c) + count1($abc, $b, $bc)
	 + count2($abc, $b) + count1($abc, $bc, $c) + count2($bc, $abc) + count2($abc, $bc) + count2($abc, $c) + count3($abc);
	printf("%d\n", $ans);
}
