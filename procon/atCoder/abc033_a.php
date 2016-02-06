<?php
    /*
        Problem URL : http://abc033.contest.atcoder.jp/tasks/abc033_a

        Result : AC
        Time   : 57 ms
        Memory : 4508 KB
     */

	// Here your code !
    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));

    $target = "";
    $verify = "";
    $ans = true;
    
    for ($i = 0; $i < strlen($N); $i++) {
        if ( $i == 0 ) {
            $target = substr($N, 0, 1);
        } else {
            $verify = substr($N, $i, 1);
            if ($target != $verify) {
                $ans = false;
            }
        }
    }
    
    echo $ans ? "SAME\n" : "DIFFERENT\n";
