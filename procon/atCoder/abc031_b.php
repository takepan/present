<?php
    /*
        Problem URL : http://abc031.contest.atcoder.jp/tasks/abc031_b

        Result : AC
        Time   : 50 ms
        Memory : 4564 KB
     */

    $fp = fopen("php://stdin", "r+");
    $line1 = trim(fgets($fp));
    list($L, $H) = explode(" ", $line1);
    $N = trim(fgets($fp));

    for ($i = 0; $i < $N; $i++)
    {
        $A = trim(fgets($fp));
        if ($A > $H)
        {
            echo "-1\n";
        } elseif ($L <= $A)
        {
            echo "0\n";
        } else
        {
            echo $L - $A . "\n";
        }
    }
