<?php
    /*
        Problem URL : http://arc032.contest.atcoder.jp/tasks/arc032_2

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $answer = 0;

    $parent = array();
    $rank = array();

    function MakeSet($x) {
        global $rank, $parent;
        $parent[$x] = $x;
        $rank[$x] = 0;
    }

    function Union($x, $y) {
        global $rank, $parent;
        $xRoot = Find($x);
        $yRoot = Find($y);
        // printf("root %2d-%2d\n", $xRoot, $yRoot);

        if ($rank[$xRoot] > $rank[$yRoot]) {
            // echo "case A\n";
            $parent[$yRoot] = $xRoot;
        } elseif ($rank[$xRoot] < $rank[$yRoot]) {
            // echo "case B\n";
            $parent[$xRoot] = $yRoot;
        } elseif ($xRoot != $yRoot) {
            // echo "case C\n";
            $parent[$yRoot] = $xRoot;
            $rank[$xRoot] = $rank[$xRoot] + 1;
        } else {
            // echo "case Z\n";
        }
    }

    function Find($x) {
        global $parent;
        if ($parent[$x] == $x) {
           return $x;
        } else {
            // echo "Find[$x]\n";
            $parent[$x] = Find($parent[$x]);
            return $parent[$x];
       }
   }

    $fp = fopen('php://stdin', 'r+');
    list($N, $M) = explode(' ', trim(fgets($fp)));
    for ($i = 1; $i <= $N; $i++) {
        MakeSet($i);
    }

    for ($i = 0; $i < $M; $i++) {
        list($x, $y) = explode(' ', trim(fgets($fp)));
        // printf("base %2d-%2d\n", $x, $y);

        Union((int)$x, (int)$y);
    }

    foreach ($parent as $k => $v) {
        // 頂点の数を数える
        if ($k == $v) {
            $answer++;
        }
    }

    // n部グラフなら、繋ぐのに必要なのはn-1本
    $answer -= 1;

    echo $answer . PHP_EOL;
