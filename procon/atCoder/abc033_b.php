<?php
// Here your code !
    $fp = fopen("php://stdin", "r+");
    $N = trim(fgets($fp));
    $totalP = 0;
    
    $arr = array();
    for ($i = 0; $i < $N; $i++)
    {
        list($arr[$i]['S'], $arr[$i]['P']) = explode(" " , trim(fgets($fp)));
        $totalP += $arr[$i]['P'];
    }
    
    for ($i = 0; $i < $N; $i++)
    {
        if ($totalP / 2 < $arr[$i]['P']) {
            exit($arr[$i]['S'] . PHP_EOL);
        }
    }
    echo "atcoder\n";
