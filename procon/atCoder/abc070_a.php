<?php

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s", $N);

$arr = str_split($N);

if ($arr[0] == $arr[2]) {
    echo "Yes\n";
} else {
    echo "No\n";
}
