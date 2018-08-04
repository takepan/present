<?php
    // データ読み込み部
    fscanf(STDIN, "%d", $N);
    $A = explode(" ", trim(fgets(STDIN)));

    // 石の数の総計
    $total = array_sum($A);
    // 1回の操作で取り出す石の数
    $one = (1 + $N) * $N / 2;
    // 取り出す回数を算出
    $round = $total / $one;
    // 切れ目の数カウント用
    $cut = 0;
    // 取り出す回数が整数でない場合はNOを出力して終了
    if (floor($round) != $round) {
        echo "NO\n";
        exit;
    }

    // 配列の最後に1番目の箱をつける
    $A[] = $A[0];
    for ($i = 0; $i < $N; $i++) {
        // 「右の箱の石の数」引く「左の箱の石の数」引く「取り出す回数」
        $diff = $A[$i+1] - $A[$i] - $round;
        if ($diff < 0) {
            // ここがマイナスになる場合には切れ目があるので切れ目の回数を計算
            $kaisuu = floor($diff / $N);
            // 切れ目の数がマイナスで増えていく
            $cut += $kaisuu;
        }
    }

    // 「切れ目の数」と「取り出す回数」が同じならYES
    if ($round == -$cut) {
        echo "YES\n";
    } else {
        echo "NO\n";
    }
