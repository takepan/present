<?php
    /*
        Problem URL : http://arc014.contest.atcoder.jp/tasks/arc014_2

        Score  : 100
        Result : AC
        Time   : 56 ms
        Memory : 3808 KB
     */

    // define('DEBUG', true);
    define('DEBUG', false);

    fscanf(STDIN, "%d", $N);
    if (DEBUG) echo "{$N}\n";

    $prev = "";
    $current = "";
    $mem = array();

    for ($i = 0; $i < $N; $i++) {
        if ($i == 0) {
            fscanf(STDIN, "%s", $current);
            if (DEBUG) printf ("%20s %20s\n", "", $current);
        } else {
            fscanf(STDIN, "%s", $current);
            $prev1 = substr($prev, -1, 1);
            $curr1 = substr($current, 0, 1);
            if (DEBUG) printf ("%20s %20s %s %s\n", $prev, $current, $prev1, $curr1);
            if ($prev1 != $curr1) {
                if (DEBUG) echo "ERROR : VIOLATION\n";
                echo ($i % 2 == 0) ? "LOSE\n" : "WIN\n";
                exit;
            }
            if (isset($mem[$current])) {
                if (DEBUG) echo "ERROR : DUPLICATE\n";
                echo ($i % 2 == 0) ? "LOSE\n" : "WIN\n";
                exit;
            }
        }
        $prev = $current;
        $mem[$current] = 1;
    }
    echo "DRAW\n";
