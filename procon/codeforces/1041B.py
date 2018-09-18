# -*- coding: utf-8 -*-
# 整数の入力
# a = int(input())
# スペース区切りの整数の入力

def gcd(a, b):
    x = max(a, b)
    y = min(a, b)

    while(True):
        z = x % y
        if z == 0:
            return y
        x = y
        y = z

a, b, x, y = map(int, input().split())

z = gcd(x, y)

# print(z)
x /= z
y /= z
h = int(a / x)
w = int(b / y)
# print(str(h) + "-" + str(w))
print(min(h,w))
