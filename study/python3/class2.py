class A:
    def say_a(self):
        print("A!")
    def say_hi(self):
        print("AA!")
class B:
    def say_b(self):
        print("B!")
    def say_hi(self):
        print("BB!")

#class C(A,B):
#    pass

class C(B,A):
    pass

c = C()
c.say_a()
c.say_b()
c.say_hi()