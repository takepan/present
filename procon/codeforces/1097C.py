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
s = {}
ans = 0
for i in range(0, a):
	b = str(input())
	while b != b.replace('()', ''):
		b = b.replace('()', '')
	# print('str: ' + b)
	if '(' in b and ')' in b:
		continue
	# else:
		# print("OK")
	if b[0:1] == "(":
		v = -1 * len(b)
	else:
		v = 1 * len(b)
	# print(v)
	if v in s:
		s[v] += 1
	else:
		s[v] = 1
# print (s)
for k, v in s.items():
	# print(k, v)
	if k < 0:
		pass
	elif k == 0:
		ans += v // 2
	else:
		if -k in s:
			ans += min(v, s[-k])
print(ans)
