<?php

    $a = 111;

    echo "-------\n\n";
    var_dump(is_null($a));
    var_dump($a === null);

    unset($a);


    echo "-------\n\n";
    var_dump(is_null($a));
    var_dump($a === null);

