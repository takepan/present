<?php
/*
    Problem URL : http://arc069.contest.atcoder.jp/tasks/arc069_b

    Score  :
    Result :
    Time   : ms
    Memory : KB
 */

// define('DEBUG', true);
define('DEBUG', false);

fscanf(STDIN, "%d", $N);
fscanf(STDIN, "%s", $s);

$from = pow(2,2);
$to = pow(2,11);

echo solve($s);
// echo solve("ooxoox");
// echo solve("oox");
// echo solve("xoooo");
// exit;
// for ($i = $from; $i < $to; $i++) {
//     $strbin = decbin($i);
//     $strbin = str_replace("0", "o", $strbin);
//     $strbin = str_replace("1", "x", $strbin);
//     echo $i . " " . $strbin . PHP_EOL;
//     printf("%s %s\n", $strbin, solve($strbin));
//     sleep(1);
// }

function solve($s) {
    $N = strlen($s);

    $s = " {$s}";

    $preset = array(
        0 => array(0 => "S", 1 => "S", 2 => "W", 3 => "W"),
        1 => array(0 => "S", 1 => "W", 2 => "S", 3 => "W"),
    );

    for ($i = 0; $i < 4; $i++) {
        $bool = true;
        $arr = array(
            0 => $preset[0][$i],
            $N => $preset[0][$i],
            1 => $preset[1][$i],
            $N+1 => $preset[1][$i]
        );
        // var_dump($arr);
        if (DEBUG) ksort($arr);
        if (DEBUG) var_dump($arr);
        for ($j = 1; $j <= $N; $j++) {
            // if (DEBUG) echo "1:{$arr[$j-1]} 2:{$arr[$j]}\n";
            switch ($arr[$j]) {
                case "S":
                    if ($arr[$j-1] == "S") {
                        if ($s[$j] == "o") {
                            $expected = "S";
                        }
                        if ($s[$j] == "x") {
                            $expected = "W";
                        }
                    }
                    if ($arr[$j-1] == "W") {
                        if ($s[$j] == "o") {
                            $expected = "W";
                        }
                        if ($s[$j] == "x") {
                            $expected = "S";
                        }
                    }
                    break;

                case "W":
                    if ($arr[$j-1] == "S") {
                        if ($s[$j] == "o") {
                            $expected = "W";
                        }
                        if ($s[$j] == "x") {
                            $expected = "S";
                        }
                    }
                    if ($arr[$j-1] == "W") {
                        if ($s[$j] == "o") {
                            $expected = "S";
                        }
                        if ($s[$j] == "x") {
                            $expected = "W";
                        }
                    }
                    break;
            }
            if (DEBUG) echo "j:{$arr[$j]} j-1:{$arr[$j-1]} \$s:$s[$j] \$expected: [{$expected}]\n";
            // if (DEBUG) echo "\$expected: [{$expected}]\n";
            if (!isset($arr[$j+1])) {
                $arr[$j+1] = $expected;
                if (DEBUG) echo ($j+1) . " {$expected}\n";
            } else {
                if ($arr[$j+1] != $expected) {
                    $bool = false;
                }
            }
        }
        if ($bool) {
            // var_dump($arr);
            ksort($arr);
            if (DEBUG) var_dump($arr);
            $arr[0] = "";
            $arr[$N+1] = "";
            return implode("", $arr) . PHP_EOL;
        }
    }
    return "-1\n";
}
