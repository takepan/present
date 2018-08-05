#import user3
from user3 import AdminUser,User3

bob = AdminUser("bob", 23)
tom = User3("tom")
print(tom.name)

print(bob.name)
bob.say_hi()
bob.say_hello()
