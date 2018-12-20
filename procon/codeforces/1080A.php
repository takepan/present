<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d%d", $n, $k);
$answer = 0;
$answer += ceil($n * 2 / $k);
$answer += ceil($n * 5 / $k);
$answer += ceil($n * 8 / $k);

echo $answer;
