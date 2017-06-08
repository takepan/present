<?php

    $pw = "1%AaA121A";

    function mkpw() {

        $data =<<<EOD
!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz
EOD;
        $data =<<<EOD
!"#$%&'*+,-./:;<=>?@[\]^_`{|}~0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz
EOD;

        $len = rand(5, 50);
        $pw = "";
        for ($i = 0; $i < $len; $i++) {
            $rnd = rand(0, strlen($data)-1);
            $pw .= $data[$rnd];
        }

        // echo $pw . PHP_EOL;
        return $pw;
    }


    for ($i = 0; $i < 10000000; $i++) {
        // $pw = uniqid("", true);
        $pw = mkpw();
        // $pw = "@@@";
        $res1 = judge($pw);
        $res2 = uchida($pw);
        if ($res1 != $res2) {
            printf("%s %d res1:%d res2:%d\n", $pw, strlen($pw), $res1, $res2);
        }
    }

    function uchida($pw) {
        return preg_match("/^(?!.*?(.)\1{2})(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)(?=.*?[#\$\-=\?@\[\]_])[a-zA-Z\d#\$\-=\?@\[\]_]{8,32}$/", $pw);
    }

    function judge($pw) {
        $arrpw = str_split($pw);

        if (count($arrpw) < 8) return false;
        if (count($arrpw) > 32) return false;

        $data =<<<EOD
!"#$%&'()*+,-./:;<=>?@[\]^_`{|}~
0123456789
ABCDEFGHIJKLMNOPQRSTUVWXYZ
abcdefghijklmnopqrstuvwxyz
EOD;

        $a = explode("\n", $data);
        foreach ($a as $k => $v) {
            $arr[$k] = str_split($v);
        }

        $hato = array();

        $num = 0;
        for ($i = 0; $i < count($arrpw); $i++) {
            foreach ($arr as $k => $v) {
                if (in_array($arrpw[$i], $v) !== false) {
                    $hato[$k] = 1;
                }
            }
        }

        if (array_sum($hato) !== 4) return false;

        for ($i = 0; $i < count($arrpw) - 2; $i++) {
            if ($arrpw[$i] == $arrpw[$i+1] && $arrpw[$i] == $arrpw[$i+2]) {
                return false;
            }
        }

        return true;
    }

