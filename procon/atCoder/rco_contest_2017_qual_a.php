<?php
    /*
        Problem URL : http://rco-contest-2017-qual.contest.atcoder.jp/tasks/rco_contest_2017_qual_a
        Score  :
        Result :
        Time   : ms
        Memory : KB
     */
 
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'On');
    // define('DEBUG', true);
    define('DEBUG', false);

    $ans = array();
    $map = array();
    $tmp = array();

    fscanf(STDIN, "%d %d %d", $H, $W, $K);
    for ($i = 0; $i < $H; $i++) {
        $map[] = str_split(trim(fgets(STDIN)));
    }

    // var_dump($map);

    $x = 0;
    $y = 0;
    $d = 1;
    $cnt = 0;
    while (isset($map[$y][$x])) {
        $cnt++;
        if ($map[$y][$x] == 0) {
            $tmp = array();
        } else {
            $tmp[] = array('x' => $x, 'y' => $y);
            if (count($tmp) == 8) {
                $ans[] = $tmp;
                unset($tmp);
            }
        }

        if ($x + $d < 0 || $x + $d == $W) {
            $d = -$d;
            $y++;
            // echo "y: " . $y . PHP_EOL;
        } else {
            $x += $d;
        }
        // printf("%d %d\n", $x, $y);
    }

    // 動確用
    // echo $cnt . PHP_EOL;
    // printf("%d %d", $x, $y);

    // 念のため空に
    $tmp = array();

    // var_dump($ans);

    // $tmp2 = $ans;
    // $ans = array($tmp2[0]);

    echo count($ans), PHP_EOL;
    foreach ($ans as $k => $v) {
        foreach ($v as $dummu => $v2) {
            printf("%d %d\n", $v2['x']+1, $v2['y']+1);
        }
    }
