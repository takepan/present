# -*- coding: utf-8 -*-
# 整数の入力
# a = int(input())
# スペース区切りの整数の入力
# b, c = map(int, input().split())
# 文字列の入力
# s = input()
# 出力
# print("{} {}".format(a+b+c, s))

n, k = map(int, input().split())
s = input()
prev = ''
ssum = {}
cnt = 0

for i in range(n):
    # print(s[i])
    moji = s[i]
    if moji == prev:
        cnt += 1
    else:
        cnt = 1
    if cnt == k:
        if moji in ssum:
            ssum[moji] += 1
        else:
            ssum[moji] = 1
        cnt = 0

    prev = moji

if len(ssum) == 0:
    print('0')
else:
    mmax = max(ssum.values())
    print(mmax)
