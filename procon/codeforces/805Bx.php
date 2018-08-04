<?php
    $len = 5;
    for ($i = 0; $i < pow(3, $len); $i++) {
        $str = make3($i, $len);
        // sprintf("%s\n", make3($i));
        $flg = true;
        for ($j = 0; $j < $len; $j++) {
            for ($k = 3; $k <= $len - $j; $k++) {
                // echo "{$j} {$k}\n";
                $moji = substr($str, $j, $k);
                $arr = str_split($moji);
                $arr_r = array_reverse($arr);
                if ($arr == $arr_r) {
                    $res = "NG";
                    $flg = false;
                } else {
                    $res = "OK";
                }
                // printf("%s %s\n", $moji, $res);

                // echo $moji . "\n";
                // sleep(1);
                // if ($res == "NG") {
                //     continue;
                // }
            }
        }
        if ($flg === true) {
            $cnt = substr_count($str, "C");
            if ($cnt <= 1) {
                echo "$str o {$cnt}\n";
            }
        } else {
            // echo "$str x \n";
        }
    }

    function make3($a, $len) {
        $ret = "";
        for ($i = $len - 1; $i >= 0; $i--) {
            $x = floor($a / pow(3, $i));
            // echo "$i:{$x}\n";
            $a -= $x * pow(3, $i);
            switch ($x) {
                case 2:
                    $ret .= "C";
                    break;
                case 1:
                    $ret .= "B";
                    break;
                case 0:
                    $ret .= "A";
                    break;
            }
        }
        return $ret;
    }


