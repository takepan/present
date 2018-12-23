# -*- coding: utf-8 -*-
# 整数の入力
#a = int(input())
# スペース区切りの整数の入力
#b, c = map(int, input().split())
# 文字列の入力
#s = input()
# 出力
#print("{} {}".format(a+b+c, s))

N, H, W = map(int, input().split())
ans = 0

for x in range(0, N):
	A, B = map(int, input().split())
	
	if (H <= A and W <= B):
		ans += 1

print("{}".format(ans))
