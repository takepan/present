# -*- coding: utf-8 -*-
# 整数の入力
a = int(input())
# a, b, x, y = map(int, input().split())
# スペース区切りの整数の入力

b = a - 2

if b % 3 == 0:
    print("1 2 " + str(b - 1))
else:
    print("1 1 " + str(b))
