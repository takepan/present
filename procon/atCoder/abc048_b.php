<?php
/*
    Problem URL : http://abc048.contest.atcoder.jp/tasks/abc048_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

ini_set('error_reporting', E_ALL & ~E_NOTICE);

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%s %s %s", $a, $b, $x);
if (DEBUG) echo implode(" ", array($a, $b, $x)) . PHP_EOL;


$mmin = bigDiv($a, $x, true);
$mmax = bigDiv($b, $x);
$ans = bigSub($mmax, $mmin);
if ($ans === false) {
    if (DEBUG) echo "false found.\n";
    echo "0\n";
    exit;
}
$ans = bigAdd($ans, "1");
if (DEBUG) echo $mmin , " " , $mmax , PHP_EOL;
echo $ans . PHP_EOL;
exit;

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
    $a_orig = $a;
    $a = bigGetArray($a);
    // $b = bigGetArray($b);
    $aa = array();
    while (true) {
        if (DEBUG) printf("count_aa: %d \$aa: %s\n", count($aa), implode("", array_reverse($aa)));
        if (count($aa) == 1 && array_sum($aa) == 0 && $a[count($a)-1] == "0") {
            array_unshift($ans, array_pop($a));
        }
        // if (count($a) > 1 && array_sum($aa) == 0 && array_sum($a) == 0 && $ans) {
        //     if (DEBUG) echo "hell\n";
        //     while($a) {
        //     }
        //     break;
        // }

        // retは 文字列 か false
        $ret = bigSub(bigKeta($aa), $b);
        // print_r($ret);
        // echo PHP_EOL;
        if ($ret === false) {
            if (!$a) break;
            $pop = array_pop($a);
            if (DEBUG) echo "\$pop: {$pop}\n";
            array_unshift($aa, $pop);
            if ($ans) {
                array_unshift($ans, 0);
            }
            if (DEBUG) var_dump($ans);
        } else {
            if (DEBUG) echo "ret: " . $ret . PHP_EOL;
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
    if (DEBUG) echo "bigDiv result: {$a_orig} {$b} {$ret}\n";
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

    while ($a[count($a)-1] == "0" && count($a) > 1) {
        unset($a[count($a)-1]);
    }

    return implode("", array_reverse($a));
}

