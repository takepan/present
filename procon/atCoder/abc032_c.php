<?php
    /*
        Problem URL : http://abc032.contest.atcoder.jp/tasks/abc032_c

        Result : AC
        Time   : 373 ms
        Memory : 22272 KB
     */

    ini_set('error_reporting', E_ALL & ~E_NOTICE);
    ini_set('display_errors', 'Off');
    define('DEBUG', FALSE);

    $zeroFlag = false;
    $cursorTo      = 0;
    $value         = 0;
    $answer        = 0;

    $fp = fopen("php://stdin", "r+");
    $line1 = trim(fgets($fp));
    list($N, $K) = explode(" ", $line1);
    for ($i = 0; $i < $N; $i++)
    {
        $s[$i] = trim(fgets($fp));
        if ($s[$i] == 0) $zeroFlag = true;
    }

    if ($zeroFlag) {
        echo $N . PHP_EOL;
        exit;
    }

    if (DEBUG) var_dump($s);

    $cursorFrom    = 0;
    if (DEBUG) echo "\$cursorFrom1 : {$cursorFrom}\n";

    for ($i = 0; $i < $N; $i++)
    {
        if (DEBUG) echo "\$cursorFrom2 : {$cursorFrom}\n";
        if ($value == 0)
        {
            $value = $s[$i];
        } else
        {
            $value *= $s[$i];
        }

        if (DEBUG) echo "Cursor:{$i} value:{$value}\n";

        $cursorTemp = $cursorFrom;
        while($value > $K)
        {
            if (DEBUG) echo "[a] ";
            if (DEBUG) usleep(100);
            if (DEBUG) echo "\$cursorFrom3 : {$cursorFrom}\n";

            if (DEBUG) echo "ZZZZ : {$s[0]}\n";
            if (DEBUG) echo "jjjj : {$cursorFrom}\n";
            if (DEBUG) echo "devide No.{$cursorFrom} value is {$s[$cursorFrom]}\n";
            $value /= $s[$cursorTemp];

            if ($cursorTemp >= $i)
            {
                $value = 0;
            }
            $cursorTemp++;
            if (DEBUG) echo "        CursorFrom:{$cursorFrom} value:{$value}\n";

        }

        if (DEBUG) echo "[LOOP OUT] value:{$value}\n";

        $cursorFrom = $cursorTemp;
        $length = $i - $cursorFrom + 1;
        if (DEBUG) echo "Length: {$answer}\n\n";
        $answer = $answer < $length ? $length : $answer;
    }

    echo $answer . PHP_EOL;
