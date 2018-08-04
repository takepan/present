<?php
    $uf = new UnionFind();
    // for ($i = 1; $i <= 10; $i++) {
    //     $uf->MakeSet($i);
    //     // var_dump($uf->Find($i));
    // }

    // for ($i = 3; $i <= 10; $i++) {
    //     $uf->Union($i, $i-2);
    //     echo "{$i} ";
    //     echo $uf->Find($i);
    //     echo PHP_EOL;
    // }

    $a = $uf->Find(1);
    $b = $uf->Find(5);
    echo "R {$a} {$b}\n";
    $uf->Union(1,5);
    $a = $uf->Find(1);
    $b = $uf->Find(5);
    echo "R {$a} {$b}\n";
    $uf->DumpAll();
    $uf->Union(2,4);
    $uf->DumpAll();
    $uf->Union(4,5);
    $uf->DumpAll();

    // var_dump($uf);

    // for ($i = 1; $i <= 10; $i++) {
    //     printf("[%d]%d ", $i, $uf->Find($i));
    // }
    // echo "\n";

    // $uf->DumpAll();

    // var_dump($uf);

    class UnionFind {

        var $cnt;
        var $data;
        // var $debug = true;
        var $debug = false;

        function __construct($cnt = 10) {
            $this->cnt = $cnt;
            $this->data = array();
            $this->MakeSetAll();
        }

        function MakeSetAll() {
            for ($i = 1; $i <= $this->cnt; $i++) {
                $this->MakeSet($i);
            }
        }

        function DumpAll() {
            if ($this->debug === false) return;
            for ($i = 1; $i <= $this->cnt; $i++) {
                printf("[%d]%d ", $i, $this->Find($i));
            }
            echo "\n";
        }

        function MakeSet($x) {
            if (!isset($this->data[$x])) {
                $this->data[$x] = array('parent' => null, 'rank' => null);
            }
            $this->data[$x]['parent'] = $x;
            $this->data[$x]['rank'] = 0;
        }
 
        function Union($x, $y) {
            $xRoot = $this->Find($x);
            $yRoot = $this->Find($y);
            // echo "xRoot: ".$xRoot. "\n";
            // echo "yRoot: ".$yRoot. "\n";
            // print_r($xRoot);
            // print_r($yRoot);
            if ($xRoot['rank'] > $yRoot['rank']) {
                $this->data[$yRoot]['parent'] = $xRoot;
                if ($this->debug) echo "$yRoot parent changes $xRoot\n";
                // $yRoot['parent'] = $xRoot;
            } elseif ($xRoot['rank'] < $yRoot['rank']) {
                $this->data[$xRoot]['parent'] = $yRoot;
                if ($this->debug) echo "$xRoot parent changes $yRoot\n";
                // $xRoot['parent'] = $yRoot;
            } elseif ($xRoot != $yRoot) {
                $this->data[$yRoot]['parent'] = $xRoot;
                if ($this->debug) echo "$yRoot parent changes $xRoot\n";
                $this->data[$xRoot]['rank']++;
                // $yRoot['parent'] = $xRoot;
                // $xRoot['rank'] = $xRoot['rank'] + 1;
            }
            if ($this->debug) echo "OK\n";
        }

        function Find($x) {
            if ($this->data[$x]['parent'] == $x) {
                return $x;
            } else {
                $this->data[$x]['parent'] = $this->Find($this->data[$x]['parent']);
                return $this->data[$x]['parent'];
            }
        }
    }