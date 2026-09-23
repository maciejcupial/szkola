# First Python program: input, print, if/else, for loop, function.

# input() always returns text.
name = input("Jak masz na imię? ")

age = int(input("Ile masz lat? "))

print("Cześć,", name)

if age >= 18:
    print("Jesteś pełnoletni.")
else:
    print("Zostało ci jeszcze tyle lat do pełnoletności:", 18 - age)

# 1, 2, 3: range() stops before the second number.
for step in range(1, 4):
    print("Powtórzenie numer", step)


def double(number):
    return number * 2


print("Twój wiek podwojony to", double(age))

# TU ZMIEŃ: dopisz tutaj własny kod, na przykład wypisz swoje ulubione liczby
