<?php
    /*
        Problem URL : http://abc033.contest.atcoder.jp/tasks/abc033_c

        Result : AC
        Time   : 107 ms
        Memory : 6108 KB
     */

    $fp = fopen("php://stdin", "r+");
    $S = trim(fgets($fp));
    $ans = 0;

    $S = preg_replace("/[2-9]/", "1", $S);

    $bool = false;
    while (!$bool)
    {
        $S2 = preg_replace("/[0-1]\*0/", "0", $S);
        $S3 = preg_replace("/0\*[0-1]/", "0", $S2);
        $S4 = preg_replace("/0\+0/", "0", $S3);
        $S5 = preg_replace("/^0\+/", "", $S4);
        $S6 = preg_replace("/\+0$/", "", $S5);
        $S7 = preg_replace("/\+0\+/", "+", $S6);
        $S8 = preg_replace("/1\*1/", "1", $S7);
        if ($S == $S8)
        {
            $bool = true;
        } else {
            $S = $S8;
        }
    }

    if ($S == '0')
    {
        echo "0\n";
    } elseif ($S == '1')
    {
        echo "1\n";
    } else
    {
        echo ( (strlen($S) + 1) / 2 ) . PHP_EOL;
    }
