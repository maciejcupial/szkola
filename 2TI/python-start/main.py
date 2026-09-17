# First Python program for the 2TI class.
# It shows the five basics in one short run: reading input, printing output, an if/else
# decision, a for loop and a function. The three files in the "tasks" folder ask the
# student to write these same building blocks on their own.

# input() shows a message and waits until the user presses Enter.
# Whatever the user types comes back as text (a string), even when it looks like a number.
name = input("Jak masz na imię? ")

# int() converts text into a whole number so we can do maths with it.
# Without int() the typed 17 would stay text and the subtraction 18 - age would fail.
age = int(input("Ile masz lat? "))

# print() writes on the screen. Values separated by commas are printed with a space between them.
print("Cześć,", name)

# if checks a condition. The indented lines below it run only when the condition is True.
# else covers every other case. The four spaces of indentation are what tells Python
# which lines belong inside the if and which belong inside the else.
if age >= 18:
    print("Jesteś pełnoletni.")
else:
    # Arithmetic works inside print() too: the result of 18 - age is printed, not the formula.
    print("Zostało ci jeszcze tyle lat do pełnoletności:", 18 - age)

# A for loop repeats the indented block once for every value it is given.
# range(1, 4) produces 1, 2, 3: it starts at the first number and stops before the second one.
for step in range(1, 4):
    print("Powtórzenie numer", step)


# def creates a function: a named piece of code we can run whenever we need it.
# number is a parameter: a placeholder for the value passed in when the function is called.
def double(number):
    # return sends the result back to the place that called the function and ends it there.
    return number * 2


# Calling double(age) runs the function with our age and gives back the doubled value.
print("Twój wiek podwojony to", double(age))

# TU ZMIEŃ: dopisz tutaj własny kod, na przykład wypisz swoje ulubione liczby
