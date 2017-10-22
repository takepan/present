<?php
// Here your code !

ini_set('error_reporting', E_ALL & ~E_NOTICE);

$a = ["イアラ","ウェイト","オメガロ","ガルヒ","ガングリオンズ","クリオ","ジェノバ","スノウガ","ズビズバ","スペシウム","タグアズ","ドドンパ","トルネ","ネメシス","バイナリル","ハザード","パリピファイア","バルース","ヒラケゴマ","フェイク","プリズマ","ホルーガ","マッハ","マホマホ","ムート","ラリホフ","ランス","ループ","ロールウェイブ","ワロス"];

$b = $a;

foreach ($a as $key => $val) {
    $b = $a;
    $argv1 = $b[$key];
    unset($b[$key]);
    // var_dump($b);
    solve($argv1, $b);


    // solve();
    // echo "val=" . $val . PHP_EOL;
    // $key = array_search($bb, $a);
    // echo "key=" . $key . PHP_EOL;

    // solve($a);

}

function solve($spell, $array) {
    $last = mb_substr($spell, -1);
    echo "{$spell} {$last} " . count($array) . "\n";

}

exit;

foreach ($a as $k) {
    $x1 = mb_substr($k, 0, 1);
    $x2 = mb_substr($k, mb_strlen($k)-1, 1);
    $s1[$x1]++;
    $s2[$x2]++;
    $h1[$x1] = $k;
    echo "{$x1} {$x2}\n";
}
var_dump($s1);
var_dump($s2);
foreach ($s1 as $k1 => $v1) {
    if (!isset($s2[$k1])) {
        while(true) {
            // echo $h1[$k1] . PHP_EOL;
        
            $lastmoji = mb_substr($h1[$k1], mb_strlen($h1[$k1])-1, 1);
            echo $lastmoji . " ";
            if (isset($h1[$lastmoji])) {
                $k1 = $lastmoji;            
            } else {
                break;
            }
        }
    }
    echo PHP_EOL;
}
