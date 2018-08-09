# -*- coding: utf-8 -*-

base = 0
answer = 1

n = int(input())

for i in range(n):
    a, b, c, d  = map(int, input().split())
    tmp = a + b + c + d
    # print(base, tmp)
    if i == 0:
        base = tmp    
    else:
        if (tmp > base):
            answer += 1

print(answer)
