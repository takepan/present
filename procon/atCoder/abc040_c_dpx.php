<?php
    /*
        Problem URL : https://abc040.contest.atcoder.jp/tasks/abc040_c

        Score  : 
        Result : 
        Time   : 
        Memory : 
     */


    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));

    echo dp($N);

    function dp($dist) {
        global $a;
        if ($dist == 1) {
            return abs($a[$N-2] - $a[$N-1]);
        } else {
            return min(
                dp($dist - 2) + abs($a[$N-3] - $a[$N-1]),
                dp($dist - 1) + abs($a[$N-2] - $a[$N-1])
            );
        }
    }