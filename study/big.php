<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$x = bigAdd("999999999999999", "2");
$x = bigSub("10000000000000000000", "2");
// $x = bigDiv("10000000000000000000", "3", true);
$x = bigDiv("99999999999999999999", "10000000000000000000");
$x = bigDiv("9", "4");
// $x = bigDiv("10000000000000000000", "7");
// $x = bigDiv("100", "49", true);
// var_dump($x);
echo $x . PHP_EOL;

function bigDiv($a, $b, $ceilFlag = false) {
    if (gettype($a) != "string") {
        exit("arg1 not string\n");
    }
    if (gettype($b) != "string") {
        exit("arg2 not string\n");
    }
    $ans = array();
    $a = bigGetArray($a);
    // $b = bigGetArray($b);
    $aa = array();
    while (true) {
        $ret = bigSub(bigKeta($aa), $b);
        // print_r($ret);
        // echo PHP_EOL;
        if ($ret === false) {
            if (!$a) break;
            array_unshift($aa, array_pop($a));
            if ($ans) {
                array_unshift($ans, 0);
            }
        } else {
            if (!$ans) {
                array_unshift($ans, 0);
            }
            $ans[0]++;
            $aa = bigGetArray($ret);
        }
    }
    // var_dump($ans);
    $ret = implode("", array_reverse($ans));
    // echo "amari: " . implode("", array_reverse($aa)) . PHP_EOL;
    $amari = implode("", array_reverse($aa));
    if ($amari != 0 && $ceilFlag === true) {
        $ret = bigAdd($ret, "1");
    }
    if ($ret == null) {
        $ret = "0";
    }
    // echo  $ret . PHP_EOL;
    return $ret;
}

function bigAdd($a, $b) {
    if (gettype($a) != "string") {
        exit("arg1 not string\n");
    }
    if (gettype($b) != "string") {
        exit("arg2 not string\n");
    }
    $a = bigGetArray($a);
    $b = bigGetArray($b);
    $keta = max(count($a), count($b));
    for ($i = 0; $i < $keta; $i++) {
        $a_ex = isset($a[$i]) ? $a[$i] : 0;
        $b_ex = isset($b[$i]) ? $b[$i] : 0;
        $a[$i] = $a_ex + $b_ex;
    }
    $a = bigKeta($a);

    return $a;
}

/*
    param : string
    return: string 
*/
function bigSub($a, $b) {
    // echo "sub1: {$a} {$b}\n";
    if (gettype($a) != "string") {
        exit("arg1 not string\n");
    }
    if (gettype($b) != "string") {
        exit("arg2 not string\n");
    }
    if (strlen($b) > strlen($a)) {
        // exit("arg2 is larger than ard1\n");
        return false;
    }
    if ((strlen($b) == strlen($a)) && $b > $a) {
        // exit("arg2 is larger than ard1\n");
        return false;
    }

    $a = bigGetArray($a);
    $b = bigGetArray($b);
    $keta = max(count($a), count($b));
    for ($i = 0; $i < $keta; $i++) {
        $a_ex = isset($a[$i]) ? $a[$i] : 0;
        $b_ex = isset($b[$i]) ? $b[$i] : 0;
        $a[$i] = $a_ex - $b_ex;
    }
    $a = bigKeta($a);

    // echo "sub2: {$a}\n";
    return $a;
}

/*
    param : string
    return: array 
*/
function bigGetArray($a) {
    if (gettype($a) != "string") {
        exit("arg1 not string\n");
    }
    return array_reverse(str_split($a));
}

function bigGetString($a) {
    if (gettype($a) != "array") {
        exit("arg1 not array\n");
    }
    return implode("", array_reverse($a));
}

/*
    param : array
    return: string 
*/
function bigKeta($a) {
    if (gettype($a) != "array") {
        exit("arg1 not array\n");
    }
    $cnt = count($a);

    $flag = true;

    while($flag) {
        $flag = false;
        foreach ($a as $key => $val) {
            if ($val < 0) {
                $a[$key+1]--;
                $a[$key] += 10;
                $flag = true;
            }
            if ($val > 9) {
                $a[$key+1]++;
                $a[$key] -= 10;
                $flag = true;
            }
        }
    }

    if ($a[$cnt-1] == "0") {
        unset($a[$cnt-1]);
    }
    return implode("", array_reverse($a));
}

