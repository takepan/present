<?php
$N = trim(fgets(STDIN));
$a = explode(" ",trim(fgets(STDIN)));
 
$ans = 0;
$min = $N;
 
$i = 0;
while($i < $N){
    $j = $i;
    while($j < $N){
        if($a[$j] == min($a)){
            $ans += $a[$j] * ($N - $j);
            $j = $N;
        }else{
            $min = min($min,$a[$j]);
            $ans += $min;
            ++$j;
        }
    }
    $min = $N;
    unset($a[$i]);
    ++$i;
}
 
echo $ans . PHP_EOL;
 