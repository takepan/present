#user_name = "taguchi"
#user_score = 10



bob2 = AdminUser("bob", 23)
print(bob2.name)
bob2.say_hi()
bob2.say_hello()


print(User.count)

tom = User("tom")
bob = User("bob")

#print(tom._User__name)
#print(bob.__name)
tom.say_hi()
bob.say_hi()
print(User.count)
print(tom.count)

User.show_info()