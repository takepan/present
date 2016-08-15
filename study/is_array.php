<?php
function isAssociativeArray($arr) {
    if (array_values($arr) === $arr) {
      return '$arr NON assoc' . "\n";
    } else {
      return '$arr assoc' . "\n";
    }
}

$arr = array(1,2,34);
echo isAssociativeArray($arr);

$arr = array('a' => 1, 'b' => 2, 'c' => 34);
echo isAssociativeArray($arr);

