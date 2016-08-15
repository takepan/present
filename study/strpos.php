<?php
    $path = "bvbba.php?12345";
    $pos = strpos($path, "?");
    if ($pos !== false) {
        echo "pos=" . $pos."\n";
        $path = substr($path, 0, $pos);
    }
    echo $path;
