# Comment
'''
a
b
c
'''
msg = "Hello\nWorld\t tab"
print(msg);
msg = "Hello_Again"
print(msg);

ADMIN_EMAIL = "xxx@gmail.com"
print(ADMIN_EMAIL)

html = """<html>
<body></body>
</html>"""
print(html)

flag = True
#flg = true

print(2+3)
print(5/3)
print(5//3)
print(2**4)
print(10%3)

y=3
y+=3
print(y)

y=3
#y2=y++
++y
print(y)
#print(y2)
#print(y3)
print(True and False)
print(True or False)
print(not True)

print ("Hello" + "World")
print ("hello" * 3)

name="namae"
score=4.5

print("name: %s, score: %f" % (name, score))
print("name: %-10s, score: %10.2f" % (name, score))
print("name: {0}, score: {1}".format(name, score))
print("name: {0:>10s}, score: {1:<10.2f}".format(name, score))

score = int(input("score?: "))
if (score>80):
    print("GREAT")
elif score>60:
    print("Good")
else:
    print("so so")

print("Great" if score > 80 else "soso")

i=0
while(i<10):
    if i == 5:
        break
    print(i)
    i+=1
else:
    print("END")

for i in range(0,10):
    if i == 5:
        break
    print("a:" + str(i))
else:
    echo("end")

for i in range(10):
    if i == 5:
        continue
    print("b:" + str(i))

def say_hi():
    print("hi")

say_hi()

def say_hi(msg):
    print("hi " + msg)

say_hi("kenji")

def say_hi(name, age = 290):
    print("hi {0}({1})".format(name, age))

say_hi("tom", 23)
say_hi("bib", 21)
say_hi("steve")
say_hi(age=18, name="kaka")

def say_hi():
    return "hi-hi"
    print("Hello")

msg = say_hi()
print(msg)

def say_hi():
    pass

msg = say_hi()
print(msg)

msg="message"

def say_hi():
    global msg
    msg = "hi3"
    print(msg)

say_hi()
print(msg)


