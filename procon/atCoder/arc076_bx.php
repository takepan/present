<?php

ini_set('error_reporting', E_ALL & ~E_NOTICE);

define('DEBUG', true);
// define('DEBUG', false);

define('MOD', pow(10, 9) + 7);

fscanf(STDIN, "%d", $N);

$uf = new UnionFind($N);

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $x[$i], $y[$i]);
}

asort($x);
asort($y);

var_dump($x);
var_dump($y);
$xk = array_keys($x);
$xv = array_values($x);
$yk = array_keys($y);
$yv = array_values($y);

for ($i = 0; $i < $N - 1; $i++) {
    $p = $xk[$i] . "-" . $xk[$i+1];
    $d = $xv[$i+1] - $xv[$i];
    $xx[$p] = $d;
}
for ($i = 0; $i < $N - 1; $i++) {
    $p = $yk[$i] . "-" . $yk[$i+1];
    $d = $yv[$i+1] - $yv[$i];
    $yy[$p] = $d;
}

asort($xx);
asort($yy);

var_dump($xx);
var_dump($yy);

$rest = $N - 1;
$curX = 0;
$curY = 0;

while($rest > 0) {
    if (!isset($tmpXK)) {
        list($tmpXK, $tmpXV) = each($xx);
    }
    if (!isset($tmpYK)) {
        list($tmpYK, $tmpYV) = each($yy);
    }
    if (DEBUG) echo "XV: " . $tmpXV . " YK:" . $tmpYV . PHP_EOL;
    if ($tmpXV > $tmpYV) {
        list($posY1, $posY2) = explode("-", $tmpYK);
        unset($tmpYK);
        if ($uf->Find($posY1) != $uf->Find($posY2)) {
            echo "BUILD YK : {$tmpYK}\n";
            $uf->Union($posY1, $postY2);            
            $ans += $tmpYV;
            $rest--;
        }
    } else {
        list($posX1, $posX2) = explode("-", $tmpXK);
        unset($tmpXK);
        if ($uf->Find($posX1) != $uf->Find($posX2)) {
            echo "BUILD XK : {$tmpXK}\n";
            $uf->Union($posX1, $postX2);            
            $ans += $tmpXV;
            $rest--;
        }
    }
    // sleep(1);

    echo PHP_EOL;
    echo "count: " . $tmpXK . "-" . $tmpYK . PHP_EOL;

    echo $rest . PHP_EOL;
}

echo $ans . PHP_EOL;

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