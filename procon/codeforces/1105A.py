# -*- coding: utf-8 -*-
# 整数の入力
# a = int(input())
# スペース区切りの整数の入力
# b, c = map(int, input().split())
# 文字列の入力
# s = input()
# 出力
# print("{} {}".format(a+b+c, s))

n = int(input())
a = list(map(int, input().split()))

a_max = max(a)
a_min = min(a)

ans = 99999999

for i in range(a_min, a_max + 1):
    tmp = 0
    for aa in a:
        if aa > i + 1:
            tmp += abs(aa - i) - 1
        elif aa < i - 1:
            tmp += abs(aa - i) - 1
    if ans > tmp:
        avg = i
        ans = tmp

print("{} {}".format(avg, ans))
