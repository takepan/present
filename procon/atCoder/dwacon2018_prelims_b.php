<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%s", $s);
$answer = 0;

while (true) {
	$answer++;
	$array = str_split($s);
	$len = count($array);

	for ($i = 0; $i < $len - 1; $i++) {
		if ($array[$i] == '2' && $array[$i + 1] == '5') {
			$array[$i] = '';
			$array[$i + 1] = '';
		}
	}

	$s = implode("", $array);

	if ($s == "") {
		break;
	}
	if (strlen($s) == $len) {
		$answer = "-1";
		break;
	}
}

echo $answer;
