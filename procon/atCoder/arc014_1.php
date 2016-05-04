<?php
    /*
        Problem URL : http://arc014.contest.atcoder.jp/tasks/arc014_1

        Score  : 100
        Result : AC
        Time   : 49 ms
        Memory : 3804 KB
     */

    fscanf(STDIN, "%d\n", $N);

    echo ($N % 2 == 0) ? "Blue\n" : "Red\n";
