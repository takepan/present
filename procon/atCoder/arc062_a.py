# -*- coding: utf-8 -*-
# 整数の入力
#a = int(input())
# スペース区切りの整数の入力
#b, c = map(int, input().split())
# 文字列の入力
#s = input()
# 出力
#print("{} {}".format(a+b+c, s))

import math

N = int(input())
for i in range(0, N):
    t, a = map(int, input().split())
    if i == 0:
        tt = t
        aa = a
        ratio = 1
    else:
        if tt % t == 0:
            rt = tt // t
        else:
            rt = tt // t + 1
        if aa % a == 0:
            ra = aa // a
        else:
            ra = aa // a + 1

        ratio = max(rt, ra)

        tt = t * ratio
        aa = a * ratio
    print("{} {} {} {} {}".format(t, a, tt, aa, ratio))

print("{}".format(tt + aa))
