<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$group = array("a", "i", "u", "e", "o");
fscanf(STDIN, "%s", $S);
$arrayS = str_split($S);
$countS = count($arrayS);

$answer = "YES";
for ($i = 0; $i < $countS; $i++) {
	if ($arrayS[$i] == "n") {
		continue;
	}

	if (in_array($arrayS[$i], $group) === false) {
		if (in_array($arrayS[$i + 1], $group) === false) {
			$answer = "NO";
		}
	}
}

echo $answer;
