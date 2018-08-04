<?php
    /*
        Problem URL : http://arc011.contest.atcoder.jp/tasks/arc011_2

        Score  : 100
        Result : AC
        Time   : 64 ms
        Memory : 4332 KB
     */

    $arrTr = array();
    $arrOutput = array();

    fscanf(STDIN, "%d", $N);
    $arrw = explode(" ", strtolower(trim(fgets(STDIN))));
    $arrB = array(
        '1' => 'b,c', '2' => 'd,w', '3' => 't,j', '4' => 'f,q', '5' => 'l,v',
        '6' => 's,x', '7' => 'p,m', '8' => 'h,k', '9' => 'n,g', '0' => 'z,r'
    );

    foreach ($arrB as $key => $val) {
        $arrBit = explode(",", $val);
        foreach ($arrBit as $c) {
            $arrTr[$c] = $key;
        }
    }
    // var_dump($arrTr);

    for ($i = 0; $i < $N; $i++) {
        $tmpStr = "";
        for ($j = 0; $j < strlen($arrw[$i]); $j++) {
            if (isset($arrTr[$arrw[$i][$j]])) {
                $tmpStr .= $arrTr[$arrw[$i][$j]];
            }
        }
        if ($tmpStr != '') {
            $arrOutput[] = $tmpStr;
        }
    }

    echo implode(" ", $arrOutput) . PHP_EOL;
