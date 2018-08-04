<?php
    fscanf (STDIN, "%s", $A);
    fscanf (STDIN, "%s", $B);

    // $a = "10";
    // $a = "100";
    // $a = "0";
    // $a = "01";
    // $arr = array("0", "01", "10");

    // foreach ($arr as $b) {
    // 	hantei($b);
    // }

    function hantei($a) {
	    if (preg_match("/^(0|[1-9][0-9]+)$/", $a)) {
	    	// echo "OK\n";
	    	return true;
	    } else {
	    	// echo "NG\n";
	    	return false;
	    }
    }

    if (hantei($A) === false) {
    	exit("NG\n");
    }
    if (hantei($B) === false) {
    	exit("NG\n");
    }

    if ($A <= 12345 && $B <= 12345) {
    	echo "OK\n";
    	// echo ($A + $B) . "\n";
    } else {
    	echo "NG\n";
    }
