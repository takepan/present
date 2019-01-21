# -*- coding: utf-8 -*-
# 整数の入力
# a = int(input())
# スペース区切りの整数の入力
# b, c = map(int, input().split())
# 文字列の入力
# s = input()
# 出力
# print("{} {}".format(a+b+c, s))

import os

n = 1000
a = 100
x = []

# path = os.getcwd()
path = __file__
path += ".dat"

f = open(path, "w")

for i in range(0, n):
    x.append(str(a))

f.write(str(n) + "\n")
f.write (" ".join(x))
# <class '_io.TextIOWrapper'>

f.close()
