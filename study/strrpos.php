<?php
    $path = "bvbba.php";
    $rpos = strrpos($path, '.');
    if ($rpos !== false) {
        echo "pos=" . $pos."\n";
        $path = substr($path, $rpos);
    }
    echo $path;
