# -*- coding: utf-8 -*-
# 整数の入力
# a = int(input())
# スペース区切りの整数の入力
# b, c = map(int, input().split())
# 文字列の入力
# s = input()
# 出力
# print("{} {}".format(a+b+c, s))

a = int(input())
b = []
res = False
for i in range(0, a):
	b.append(int(input()))
	# print(b[i])
for i in range(0, 2**a):
	s = str(bin(i)[2:]).zfill(a)
	# print(s)
	tmp = 0
	for j in range(0,a):
		if s[j] == "0":
			tmp += b[j]
		else:
			tmp -= b[j]
	# print (tmp)
	if tmp % 360 == 0:
		res = True
if res == True:
	print("YES")
else:
	print("NO")
