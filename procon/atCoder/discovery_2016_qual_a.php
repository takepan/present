<?php
// Here your code !
$fp = fopen("php://STDIN", "r+");
$s = trim(fgets($fp));
 
$a = 'DiscoPresentsDiscoveryChannelProgrammingContest2016';
 
while (strlen($a) > 0)
{
    echo substr($a, 0, $s);
    echo PHP_EOL;
    $a = substr($a, $s);
}
 
?>
