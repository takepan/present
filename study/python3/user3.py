class User3:
    count = 0
    def __init__(self, name):
        User3.count += 1
        self.name = name
    def say_hi(self):
        print("hi {0}".format(self.name))
    @classmethod
    def show_info(cls):
        print("{0} instances" . format(cls.count))

class AdminUser(User3):
    def __init__(self, name, age):
        super().__init__(name)
        self.age = age
    def say_hello(self):
        print("hello {0}({1})" . format(self.name, self.age))
    def say_hi(self):
        print("[Admin]hi {0}".format(self.name))

print("SECRET")