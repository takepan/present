<?php

define('DEBUG', true);
// define('DEBUG', false);

fscanf(STDIN, "%d %d", $N, $W);

//ナップザックの容量を設定
$knapsack = new Knapsack($W);

//ナップザックの商品を追加
for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d %d", $w, $v);
    $knapsack->addProduct($w, $v);
}

//ナップザックを解く
$knapsack->solveKnapsack();

class Knapsack {
    public $knapsack;      //ナップザック
    public $knapsackCount; //ナップザックの容量
    public $products;      //商品。商品はサイズと価値がある

    public function __construct($capacity) {
        $this->knapsack      = array_fill(0, $capacity + 1, 0);
        $this->knapsackCount = $capacity;
        $this->product       = array();
    }

    public function addProduct($size, $value) {
        $this->products[] = array('size' => $size, 'value' => $value);
    }

    public function solveKnapsack() {
        $ans = 0;

        //ナップザックに詰め込んだ時の値を初期化
        $napValue = array_fill(0, $this->knapsackCount + 1, 0);

        //ナップザックの容量を表示する
        if (DEBUG) echo 'Knapsack size' . "\n";
        for ($i = 1; $i < $this->knapsackCount + 1; $i++) {
            if (DEBUG) echo $i . "\n";
        }
        if (DEBUG) echo "\n";

        //扱う商品を1つずつ増やしていく
        $productCount = count($this->products);
        for ($i = 0; $i < $productCount; $i++) {
            //$napIndexの初期値は商品のサイズから。
            for ($napIndex = $this->products[$i]['size']; $napIndex < $this->knapsackCount + 1; $napIndex++) {
                $newValue = $napValue[$napIndex - $this->products[$i]['size']] + $this->products[$i]['value'];
                if ($newValue > $napValue[$napIndex]) {
                    $napValue[$napIndex] = $newValue;
                }
            }
            //表示
            if (DEBUG) echo 'until' . ($i + 1) . "\n";
            for ($napIndex = 1; $napIndex < $this->knapsackCount + 1; $napIndex++) {
                if (DEBUG) echo $napValue[$napIndex] . "\n";
                $ans = $napValue[$napIndex];
            }
            if (DEBUG) echo "\n";
        }
        if (DEBUG) echo "\n";
        echo $ans . PHP_EOL;
    }
}