<?php
    /*
        Problem URL : http://s8pc-1.contest.atcoder.jp/tasks/s8pc_1_b

        Result : AC
        Time   : 86ms
        Memory : 4568KB
     */

    $fp = fopen('php://stdin', 'r');
    list($H, $W, $N) = explode(" ", trim(fgets($fp)));

    $X = array();
    $Y = array();
    $angle = 0;
    $arrAnswer = array();

    for ($i = 0; $i < $N; $i++)
    {
        list($X[$i], $Y[$i]) = explode(" ", trim(fgets($fp)));
    }

    for ($iX = 1; $iX < $W; $iX++)
    {
        $angle = $H / $iX;
        // echo "A. Cut to {$iX} {$H} angle:{$angle}\n";

        $side1 = 0;
        $side2 = 0;
        $bool = TRUE;
        foreach ($X as $key => $val)
        {
            $amari = $X[$key] * $angle - $Y[$key];
            // echo $amari . "\n";
            if ($amari == 0) {
                $bool = FALSE;
            } elseif ($amari > 0)
            {
                $side1++;
            } else
            {
                $side2++;
            }
        }
        if ($side1 == $side2 && $bool)
        {
            // echo "{$iX} {$H}\n";
            $arrAnswer[] = array($iX, $H);
        }
    }

    for ($iY = 1; $iY <= $H; $iY++)
    {
        $angle = $iY / $W;
        // echo "B. Cut to {$W} {$iY} angle:{$angle}\n";

        $side1 = 0;
        $side2 = 0;
        $bool = TRUE;
        foreach ($X as $key => $val)
        {
            $amari = $X[$key] * $angle - $Y[$key];
            // echo $amari . "\n";
            if ($amari == 0) {
                $bool = FALSE;
            } elseif ($amari > 0)
            {
                $side1++;
            } else
            {
                $side2++;
            }
        }
        if ($side1 == $side2 && $bool)
        {
            // echo "{$W} {$iY}\n";
            $arrAnswer[] = array($W, $iY);
        }
    }

    if (count($arrAnswer) == 0)
    {
        echo "-1\n";
    } else
    {
        foreach ($arrAnswer as $k)
        {
            echo "({$k[0]},{$k[1]})\n";
        }
    }

