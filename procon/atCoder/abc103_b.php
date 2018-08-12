<?php
fscanf(STDIN, "%s", $S);
fscanf(STDIN, "%s", $T);

$answer = "No\n";
for ($i = 0; $i < strlen($S); $i++) {
	$x = substr($S, $i) . substr($S, 0, $i);
	if ($x == $T) {
		$answer = "Yes\n";
	}
}

echo $answer;
