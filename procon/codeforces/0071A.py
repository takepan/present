# -*- coding: utf-8 -*-
# 整数の入力
a = int(input())
# a, b, x, y = map(int, input().split())
# スペース区切りの整数の入力

for i in range(0, a):
    s = str(input())
    length = len(s)
    if length > 10:
        s1 = s[0]
        i = str(length - 2)
        s2 = s[-1]
        print (s1 + i + s2)
    else:
        print(s)
