# -*- coding: utf-8 -*-
# 整数の入力
# a = int(input())
# スペース区切りの整数の入力
# b, c = map(int, input().split())
# 文字列の入力
# s = input()
# 出力
# print("{} {}".format(a+b+c, s))


table = str(input())
# print(table)
table_n = table[0:1]
table_m = table[1:2]
# print(table_n)
# print(table_m)

res = False

ary = input().split(' ')
for i in ary:
	# print(i)
	tmp_n = i[0:1]
	tmp_m = i[1:2]
	# print(tmp_n)
	# print(tmp_m)
	if table_n == tmp_n or table_m == tmp_m:
		res = True

if res == True:
	print ("YES")
else:
	print ("NO")
