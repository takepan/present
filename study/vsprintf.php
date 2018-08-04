<?php

$strDate = "20170505";
$strTime = "100806";

echo substr($strDate, 0, 4) , "-" , substr($strDate, 4, 2) , "-" , substr($strDate, 6, 2) , " " ,
     substr($strTime, 0, 2) , ":" , substr($strTime, 2, 2) , ":" , substr($strTime, 4, 2);

echo PHP_EOL;

echo vsprintf("%04d-%02d-%02d %02d:%02d:%02d", sscanf($strDate . $strTime, "%4d%2d%2d%2d%2d%2d"));
