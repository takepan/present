#import mypackage.user3
#import mypackage.user3 as mymodule
from mypackage.user3 import AdminUser

#bob = mypackage.user3.AdminUser("bob", 23)
#bob = mymodule.AdminUser("bob", 23)
bob = AdminUser("bob", 23)

print(bob.name)
bob.say_hi()
bob.say_hello()
