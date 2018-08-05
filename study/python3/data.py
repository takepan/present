# LIST
score = [40, 50]
print(score[0])
print(score[1])
score[0] = 34
print(score[0])
print(len(score))
score.append(60)
print(score[2])

for s in score:
    print(s)

for i, s in enumerate(score):
    print("{0}: {1}". format(i, s))

#TUPLE
items = (50, "apple", 32.4)
print(items[1])
#items[1] = "fuck"

print(list((1,3,5)))
print(tuple([1,3,5]))

scores = [40, 50, 70, 90, 60]
print(scores[1:4])
print(scores[:2])
print(scores[3:])
print(scores[-3:])

s = "hello"
print(s[1:3])

a = set([4,5,8,5])
a = {4,5,8,5}
print(a) # 8,4,5
print(5 in a)
a.add(0)
a.remove(5)
print(a)
print(len(a))

a = {1,3,5,8}
b = {3,5,8,9}
print(a|b)
print(a&b)
print(a-b)

sales = {"taguchi": 200, "koji": 400}
sales["taguchi"] = 399
print(sales["taguchi"])
print(sales["koji"])
sales["dewa"] = 4500
del(sales["koji"])
print(sales)

for key, value in sales.items():
    print("{0}: {1}". format(key, value))

scores = [40, 50, 70, 90, 60]
it = iter(scores)
print(next(it))
print(next(it))
print(next(it))
print("he;;p")
print(next(it))

for score in scores:
    print(score)

def get_inifinite():
    i = 0
    while True:
        yield i * 2
        i += 1

g = get_inifinite()
print(next(g))
print(next(g))
print(next(g))
print(next(g))
print(next(g))
print(next(g))
print(next(g))
print(next(g))

# def triple(n):
#     return n*3

#print(list(map(triple, [1,2,3])))

#LAMBDA

print(list(map(lambda n: n * 3, [1,2,3])))

# def is_even(n):
#     return n % 2 == 0

# print(list(filter(is_even, range(10))))
print(list(filter(lambda n: n % 2 == 0, range(10))))

print ([i for i in range(10)])
print ([i * 3 for i in range(10) if i % 2 == 0])
print ((i * 3 for i in range(10) if i % 2 == 0))
print (i * 3 for i in range(10) if i % 2 == 0)
print ({i * 3 for i in range(10) if i % 2 == 0})
