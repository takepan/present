<?php
    /*
        Problem URL : http://tenka1-2016-qualb.contest.atcoder.jp/tasks/tenka1_2016_qualB_a

        Score  : 
        Result : 
        Time   : 
        Memory : 
     */

    function f($n) {
    	return floor (( $n * $n + 4) / 8);
    }

    echo f(f(f(20))) . PHP_EOL;