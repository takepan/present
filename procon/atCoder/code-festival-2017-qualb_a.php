<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%s", $S);

echo substr($S, 0, strlen($S) - strlen('FESTIVAL')) . PHP_EOL;
