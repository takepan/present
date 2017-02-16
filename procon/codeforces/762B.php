<?php
    ini_set('display_errors', 'On');
    ini_set('error_reporting', E_ALL & ~E_NOTICE);

    // define('DEBUG', true);
    define('DEBUG', false);

    fscanf(STDIN, "%d %d %d", $u, $p, $b);

    fscanf(STDIN, "%d", $n);

    $ans1 = 0;
    $ans2 = 0;

    $arr = array();
    for ($i = 0; $i < $n; $i++) {
        fscanf(STDIN, "%d %s", $arr[$i]['cost'], $m);
        $arr[$i]['device'] = $m[0];
    }
    // var_dump($arr);

    function sorty($key) {
        return function ($a, $b) use ($key) {
            return ($a[$key] > $b[$key]);
        };
    }
    usort($arr, sorty('cost'));

    $a = array('P' => array(0=>0), 'U' => (array(0=>0)));
    $s = array('P' => array(0=>0), 'U' => (array(0=>0)));
    $ans = PHP_INT_MAX;

    for ($i = 0; $i < $n; $i++) {
        $a[$arr[$i]['device']][] = $arr[$i]['cost'];
    }
    if (DEBUG) var_dump($a);

    foreach ($a as $k => $v) {
        $cnt = count($a[$k]) - 1;
        for ($i = 1; $i <= $cnt; $i++) {
            $s[$k][$i] = $s[$k][$i-1] + $a[$k][$i];
        }
    }

    $cntU = count($a['U']) - 1;
    $cntP = count($a['P']) - 1;

    $rest_p = $cntP - $p;
    $rest_u = $cntU - $u;
    if ($rest_p < 0) {
        $rest_p = 0;
        $p = $cntP;
    }
    if ($rest_u < 0) {
        $rest_u = 0;
        $u = $cntU;
    }
    if ($rest_u + $rest_p < $b) {
        $b = $rest_u + $rest_p;
    }
    if (DEBUG) echo "u:{$u} p:{$p} b:{$b}\n";
    for ($i = 0; $i <= $b; $i++) {
        if (DEBUG) echo "u:".($u+$i). " p:".($p+$b-$i)."\n";
        if (isset($s['U'][$u+$i]) === false) continue;
        if (isset($s['P'][$p+$b-$i]) === false) continue;
        $costs = $s['U'][$u+$i] + $s['P'][$p+$b-$i];
        if (DEBUG) printf("U:%d P:%d costs:%d\n", $u+$i, $p+$b-$i, $costs);
        $ans = min($ans, $costs);
    }
    echo ($u+$p+$b) . " " . $ans;
