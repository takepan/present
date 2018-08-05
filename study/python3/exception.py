class MyException(Exception):
    pass

def div(a, b):
    try:
        if (b < 0):
            raise MyException("NOT MINUS")
        print(a / b)
    except ZeroDivisionError:
        print("not by zero!")
    except MyException as e:
        print(e)
    else:
        print("no exception!")
    finally:
        print("End")

div(10, 3)
div(10, 0)
div(10, -2)