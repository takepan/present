<?php
    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('memory_limit', '512M');

    define('DEBUG', true);
    // define('DEBUG', false);

    $Pmem = new Pmem();

    if (DEBUG) $tm1 = microtime(true);

    $erat = array();
    $arrP = array();
    define('MMAX', pow(10, 5));
    for ($i = 2; $i <= MMAX; $i++) {
        $erat[$i] = 1;
    }
    for ($i = 2; $i <= sqrt(MMAX); $i++) {
        $divs = MMAX / $i;
        for ($j = 2; $j <= $divs; $j++) {
            unset($erat[$i*$j]);
        }
    }
    $arrP = array_keys($erat);

    fscanf(STDIN, "%d", $N);
    $a = explode(" ", trim(fgets(STDIN)));

    // for TEST
    $a = range(1, 100000);

    $cnt = count($a);
    $sum = array(1 => 1);

    for ($i = 0; $i < $cnt; $i++) {
        $test = in_array($a[$i], $arrP);
        $ret = $Pmem->get($a[$i]);
        if (is_array($ret)) {
            foreach ($ret as $num) {
                $sum[$num]++;
            }
        }
    }

    // var_dump($sum);
    // echo "answer:";

    echo max($sum);

    if (DEBUG) {
        $tm2 = microtime(true);
        echo PHP_EOL . "Time: " . ($tm2 - $tm1);
    }

    class Pmem {
        var $mem = array();

        function get($num) {
            if (isset($this->mem[$num])) {
                return $this->mem[$num];
            } else {
                return $this->check($num);
            }
        }

        function check($num) {
            $this->mem[$num] = array();

            $loop = sqrt($num);
            for ($i = 2; $i <= $loop; $i++) {
                if ($num % $i == 0) {
                    $this->mem[$num][] = $i;
                    $this->mem[$num][] = $num / $i;
                }
            }

            if ($num > 1) $this->mem[$num][] = $num;
            return array_unique($this->mem[$num]);
        }



    }
