<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d %d", $n, $k);
$a = explode(" ", trim(fgets(STDIN)));

arsort($a);
// var_dump($a);

$cnt = 0;
foreach ($a as $key => $val) {
	$cnt++;
	$score += $val;
	$pos[] = $key;
	if ($cnt == $k) {
		break;
	}

}
// echo "pos:";
sort($pos);
// var_dump($pos);
$s[0] = -1;
for ($i = 0; $i < $k - 1; $i++) {
	$s[$i + 1] = $pos[$i];
}
$s[$k] = $n - 1;
for ($i = 0; $i < $k; $i++) {
	$ans[] = $s[$i + 1] - $s[$i];
}
// var_dump($s);
echo $score . PHP_EOL;
echo implode(" ", $ans);