<?php
    fscanf(STDIN, "%s", $s);
    if (preg_match("/AC/", $s)) {
        echo "Yes\n";
    } else {
        echo "No\n";
    }