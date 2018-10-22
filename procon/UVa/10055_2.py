# -*- coding: utf-8 -*-

lst=[]
while 1:
    try:
        # x=int(input())
        b, c = map(int, input().split())
        # lst.append([b, c])
        print(abs(c - b))
    except EOFError:
        break
# print(type(lst),lst)
