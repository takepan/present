<?php
/*
    Problem URL : http://arc074.contest.atcoder.jp/tasks/arc074_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// $ans = makeSort(53, array(90, 53, 84, 40));
// var_dump($ans);
// exit;

// $ans = makeSort("5", array());
// $ans = makeSort("5", array("10"));
// $ans = makeSort("5", array("2"));
// $ans = makeSort("15", array("10", "20"));
// var_dump($ans);
// exit;

// $input = array("red", "green", "blue", "yellow");
// array_splice($input, 3, 0, "purple");
// var_dump($input);
// exit;

// $arr = array("1", "2", "3");
// array_splice($arr, 3, 0, "a");
// // array_splice($arr, 1, 0, "b");
// // array_splice($arr, 0, 0, "c");
// var_dump($arr);
// exit;

// $sample = 33;

// $arr = array();
// for ($i = 0; $i < $sample; $i++) {
//     $arr[$i] = rand(1, 100);
// }
// // var_dump($arr);
// echo implode(" ", $arr) . PHP_EOL;

// // $arr = array(90, 53, 84, 40, 53);

// $ans = array();
// foreach ($arr as $num) {
//     // echo $num . PHP_EOL;
//     $ans = makeSort($num, $ans);
// }
// echo implode(" ", $ans) . PHP_EOL;

// // var_dump($ans);
// exit;

// $numを$arrの配列に入れる(昇順)
function makeSort($num, $arr) {
    // echo "------\n";
    // var_dump($arr);
    // echo $num;
    // echo "======\n";

    $cnt = count($arr);

    if ($cnt === 0) {
        $arr[] = $num;
        return $arr;
    }

    $l = 0;
    $r = $cnt + 1;

    while (true) {

        $m = floor(($l + $r) / 2);
        // echo "L:{$l} M:{$m} R:{$r}\n";

        // echo "\$m-1:". ($m-1) ." num:{$num} arr[m]:{$arr[$m-1]}\n";

        // echo "{$arr[$m-1]} ??? {$num}\n";

        if ($arr[$m-1] === $num) {
            // echo "EQUAL\n";
            array_splice($arr, $m-1, 0, $num);
            return $arr;
        }

        if ($arr[$m-1] > $num) {
            // echo "GREATER\n";
            if ($m - $l == 1) {
                // echo "TYPE A\n";
                array_splice($arr, $m-1, 0, $num);
                return $arr;
            } else {
                // echo "TYPE C [". ($r - $m) ."]\n";
                $r = $m;
                continue;
            }
        }
        if ($arr[$m-1] < $num) {
            // echo "LESSER\n";
            // echo "L:{$l} M:{$m} R:{$r}\n";
            if ($r - $m == 1) {
                // echo "TYPE B\n";
                array_splice($arr, $m, 0, $num);
                return $arr;
            } else {
                // echo "TYPE D\n";
                $l = $m;
                continue;
            }
        }
    }
}

// exit;

ini_set('error_reporting', E_ALL & ~E_NOTICE);

fscanf(STDIN, "%d", $N);
$a = explode(" ", trim(fgets(STDIN)));
$b = array_reverse($a);

$ans = -PHP_INT_MAX;

$x = array_slice($a, 0, $N);
$y = array_slice($b, 0, $N);

sort($x);
sort($y);

$sumX[$N] = array_sum($x);
$sumY[$N] = array_sum($y);

for ($i = $N; $i < 2 * $N; $i++) {

    // $sumX[$i] = array_sum($x);
    // $sumY[$i] = array_sum($y);

    // echo "SUM:\n";
    // echo $sumX[$i] . PHP_EOL;
    // echo $sumY[$i] . PHP_EOL;
    // echo PHP_EOL;

    // echo "***{$i}\n";



    // array_unshift($x, $a[$i]);
    // array_unshift($y, $b[$i]);
    $x = makeSort($a[$i], $x);
    // echo "X: " . implode(" ", $x) . "\n";
    // echo "C: " . implode(" ", $y);
    // echo PHP_EOL;
    $y = makeSort($b[$i], $y);
    // echo "D: " . implode(" ", $y);
    // echo PHP_EOL.PHP_EOL;

    // rsort($x);
    // sort($y);

    // array_pop($x);
    // array_pop($y);

    $aa = array_shift($x);
    // echo "aa:{$aa}\n";
    // echo "A: " . implode(" ", $y);
    // echo PHP_EOL;
    $bb = array_pop($y);
    // echo "B: $bb - " . implode(" ", $y);
    // echo PHP_EOL.PHP_EOL;

    $sumX[$i+1] = $sumX[$i] + $a[$i] - $aa;
    $sumY[$i+1] = $sumY[$i] + $b[$i] - $bb;

    // echo count($x) . PHP_EOL;
    // echo count($y) . PHP_EOL;
}
// var_dump($sumX);
// var_dump($sumY);
for ($i = $N; $i <= $N * 2; $i++) {

    $tmp = $sumX[$i] - $sumY[$N * 3 - $i];
    // echo "{$i} " . $tmp . PHP_EOL;
    $ans = max($ans, $tmp);
}

echo $ans . PHP_EOL;
