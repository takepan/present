<?php
    /*
        Problem URL : http://arc032.contest.atcoder.jp/tasks/arc032_2

        Score  :
        Result :
        Time   :  ms
        Memory :  KB
     */

    $parent = array();
    $rank = array();

    function MakeSet($x) {
        global $rank, $parent;
        $parent[$x] = $x;
        $rank[$x] = 0;
    }
     
    function Union($x, $y) {
        global $rank, $parent;
        $xRoot = (int) Find($x);
        $yRoot = (int) Find($y);
        // var_dump($xRoot);
        // var_dump($yRoot);
        if ($rank[$xRoot] > $rank[$yRoot]) {
            $parent[$yRoot] = $xRoot;
        } elseif ($rank[$xRoot] < $rank[$yRoot]) {
            $parent[$xRoot] = $yRoot;
        } elseif ($xRoot != $yRoot) {
            $parent[$yRoot] = $xRoot;
            $rank[$xRoot] = $rank[$xRoot] + 1;
        } // x と y が同じ集合にない場合だけマージする。
    }

    function Find($x) {
        global $parent;
        if ($parent[$x] == $x) {
           return $x;
        } else {
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
        Union($x, $y);
        // var_dump($parent);
    }
    /*
    foreach ($parent as $key => $value) {
        printf ("%6d %6d %6d\n", $key, $value, $rank[$key]);
    }
    */
    $arr = array_unique($parent);

    $answer = count(array_unique($parent)) - 1;

    echo $answer . PHP_EOL;