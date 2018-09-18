# -*- coding: utf-8 -*-
# 整数の入力
# a = int(input())
# スペース区切りの整数の入力

import math

a, b, x, y = map(int, input().split())

z = math.gcd(x, y)

# print(z)
x /= z
y /= z
h = int(a / x)
w = int(b / y)
# print(str(h) + "-" + str(w))
print(min(h,w))
