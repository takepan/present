<?php
for ($i = 0; $i < 10000; $i++) {
    $fp = fopen("C:/Users/user_dev05/Documents/present/procon/atCoder/abc027_b8.dat", "w+");
    fputs($fp, "9\n");
    $arr = array();
    for ($j = 0; $j < 9; $j++) {
        $arr[$j] = rand(0, 12);
    }
    fputs($fp, implode(" ", $arr) . PHP_EOL);

    $a = exec("php -f C:/Users/user_dev05/Documents/present/procon/atCoder/abc027_b_o.php < C:/Users/user_dev05/Documents/present/procon/atCoder/abc027_b8.dat");
    $b = exec("php -f C:/Users/user_dev05/Documents/present/procon/atCoder/abc027_b.php < C:/Users/user_dev05/Documents/present/procon/atCoder/abc027_b8.dat");
    if ($a != $b) {
        exit;
    }

}


