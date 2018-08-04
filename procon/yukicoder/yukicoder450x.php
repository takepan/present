<?php
    fscanf (STDIN, "%d %d", $vl, $vr);
    fscanf (STDIN, "%d", $d);
    fscanf (STDIN, "%d", $w);

    $t = 0;
    $pl = 0;    // 左車の位置
    $pr = $d;   // 右車の位置
    $pw = 0;    // ハチの位置
    $di = "r";    // 向き
    $ans = 0;
    $prev = 0;

    while ($pr - $pl > 0) {
        switch ($di) {
            // 右向き
            case "r":
                $dt = ($pr - $pw) / ($vr + $w);
                $pw += $dt * $w;
                $pr -= $dt * $vr;
                $pl += $dt * $vl;
                $ans += $dt * $w;
                $di = "l";
                break;

            // 左向き
            case "l":
                $dt = ($pw - $pl) / ($vl + $w);
                $pw -= $dt * $w;
                $pr -= $dt * $vr;
                $pl += $dt * $vl;
                $ans += $dt * $w;
                $di = "r";
                break;
        }

        // 答えが増えなくなったら終了
        if ($prev == $ans) break;
        $prev = $ans;

        // 確認用
        // echo $pl . " " . $pr . " " . $ans . PHP_EOL;
    }

    echo $ans . PHP_EOL;
