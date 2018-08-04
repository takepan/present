<?php

// define('DEBUG', true);
define('DEBUG', false);

// define('MOD', 1000000007);

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $S);

$ans = 0;
while(true) {
    echo $S . PHP_EOL;
    $loc = strpos($S, '101');
    var_dump($loc);
    if ($loc !== false) {
        $newS = substr($S, 0, $loc);
        $newS .= "010";
        $newS .= substr($S, $loc + 3);
    } else {
        break;
    }
    $S = $newS;
    $ans++;
    // echo $S . PHP_EOL;
    // sleep(1);
}
echo $ans . PHP_EOL;
exit;

while(true) {
    $arr = array();
    if (preg_match_all("/101+/", $S, $regL)) {
        var_dump($regL);
        foreach ($regL[0] as $l) {
            $len = strlen($l);
            $arr[$len] = $l;
        }
    }
    if (preg_match_all("/1+01/", $S, $regR)) {
        var_dump($regR);
        foreach ($regR[0] as $r) {
            $len = strlen($r);
            $arr[$len] = $r;
        }
    }
    rsort($arr);
    if (count($arr) == 0) break;
    // var_dump($arr);
    echo $arr[0] . PHP_EOL;
    echo "BEFORE S : {$S}\n";
    // $S = str_replace($arr[0], "010", $S, $cnt);
    echo "AFTER S : {$S}\n";
    echo "count:{$cnt}\n";
    $S = preg_replace("/{$arr[0]}/", "010", $S, 1);
    $ans += strlen($arr[0]) - 2;
    sleep(1);
}

echo $ans . PHP_EOL;