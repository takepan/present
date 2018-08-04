<?php
/*
    Problem URL : http://mujin-pc-2017.contest.atcoder.jp/tasks/mujin_pc_2017_a

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// ini_set('memory_limit', '256M');
ini_set('memory_limit', '-1');

// define('DEBUG', true);
define('DEBUG', false);

if (DEBUG) {
    $time_s = microtime(true);
}

fscanf(STDIN, "%d", $N);
$x = explode(" ", trim(fgets(STDIN)));

$str = str_repeat("_", max($x));
$start = $str;

for ($i = 0; $i < $N; $i++) {
    $str[$x[$i]-1] = chr(65 + $i);
}

$arr = array("{$str}," => 0);
$bool = true;

while ($bool) {
    foreach ($arr as $str => $flag) {
        $bool = false;
        if ($flag == 1) continue;

        $arr[$str] = 1;
        // if (DEBUG) echo $str . PHP_EOL;
        $bool = true;

        list($str, $goal) = explode(",", $str);
        if ($str == "") continue;
        for ($i = 0; $i < $N; $i++) {
            $pos = strpos($str, chr(65 + $i));
            if ($pos === false) {

            } else {
                if ($pos === 0 || $pos === 1) {
                    $newstr = $str;
                    $newstr[$pos] = "_";
                    $tmpgoal = $goal . chr(65 + $i);
                    $strgoal = "{$newstr},{$tmpgoal}";
                    if (!isset($arr[$strgoal])) {
                        $arr[$strgoal] = 0;
                        // echo $strgoal . PHP_EOL;
                        // $bool = true;
                    }
                }
                if ($str[$pos-2] == "_") {
                    $newstr = $str;
                    $newstr[$pos-2] = chr(65 + $i);
                    $newstr[$pos] = "_";
                    $strgoal = "{$newstr},{$goal}";
                    if (!isset($arr[$strgoal])) {
                        $arr[$strgoal] = 0;
                        // echo $strgoal . PHP_EOL;
                        // $bool = true;
                    }
                }
                if ($str[$pos-1] == "_") {
                    $newstr = $str;
                    $newstr[$pos-1] = chr(65 + $i);
                    $newstr[$pos] = "_";
                    $strgoal = "{$newstr},{$goal}";
                    if (!isset($arr[$strgoal])) {
                        $arr[$strgoal] = 0;
                        // echo $strgoal . PHP_EOL;
                        // $bool = true;
                    }
                }

            }            
        }
    }

}

// echo $str . PHP_EOL;
// var_dump($arr);
$ans = array();

foreach ($arr as $key => $val) {
    list($str, $goal) = explode(",", $key);
    if ($str == $start) {
        $ans[] = $goal;
        // if (DEBUG) echo $goal . PHP_EOL;
    }
}
echo count(array_unique($ans)) . PHP_EOL;

if (DEBUG) {
    echo (microtime(true) - $time_s) . PHP_EOL;
    echo number_format(memory_get_peak_usage()) . PHP_EOL;
}