<?php
    $uf = new UnionFind();
    for ($i = 1; $i <= 10; $i++) {
        $uf->MakeSet($i);
        // var_dump($uf->Find($i));
    }
    for ($i = 3; $i <= 10; $i++) {
        $uf->Union($i, $i-2);
        echo "{$i} ";
        echo $uf->Find($i);
        echo PHP_EOL;
    }

    // var_dump($uf);

    for ($i = 1; $i <= 10; $i++) {
        echo $uf->Find($i) . PHP_EOL;
    }

    // var_dump($uf);

    class UnionFind {

        var $data;

        function __construct() {
            $this->data = array();
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
                echo "$yRoot parent changes $xRoot\n";
                // $yRoot['parent'] = $xRoot;
            } elseif ($xRoot['rank'] < $yRoot['rank']) {
                $this->data[$xRoot]['parent'] = $yRoot;
                echo "$xRoot parent changes $yRoot\n";
                // $xRoot['parent'] = $yRoot;
            } elseif ($xRoot != $yRoot) {
                $this->data[$yRoot]['parent'] = $xRoot;
                echo "$yRoot parent changes $xRoot\n";
                $this->data[$xRoot]['rank']++;
                // $yRoot['parent'] = $xRoot;
                // $xRoot['rank'] = $xRoot['rank'] + 1;
            }
            echo "OK\n";
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