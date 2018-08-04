<?php
$N = trim(fgets(STDIN));
$a = explode(" ",trim(fgets(STDIN)));
 
$ans = 0;
$min = $N;
 
$i = 0;
while($i < $N){
    $j = $i;
    while($j < $N){
        $min = min($min,$a[$j]);
        $ans += $min;
        ++$j;
    }
    $min = $N;
    ++$i;
}
 
echo $ans . PHP_EOL;