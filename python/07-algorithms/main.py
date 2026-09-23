# Algorithms: binary conversion, remainder, prime test, insertion sort.
# Lessons 18-26.

from math import sqrt


def division_remainder(a, b):
    return a % b


def is_prime(n):
    if n < 2:
        return False
    if n == 2:
        return True
    if n % 2 == 0:
        return False

    # A divisor above the square root has a partner below it.
    root = int(sqrt(n))
    # The third value of range() is the step: 3, 5, 7, ...
    for i in range(3, root + 1, 2):
        if n % i == 0:
            return False
    return True


def insertion_sort(numbers):
    n = len(numbers)
    for i in range(1, n):
        # Saved, because numbers[i] gets overwritten below.
        temp = numbers[i]
        j = i - 1
        while j >= 0 and numbers[j] > temp:
            numbers[j + 1] = numbers[j]
            j -= 1
        numbers[j + 1] = temp


number = int(input("Podaj liczbę całkowitą dodatnią: "))

digits = []
# A copy, so number keeps the typed value for the print below.
quotient = number

while quotient > 0:
    digits.append(quotient % 2)
    quotient = quotient // 2

print("Zapis dwójkowy liczby", number, "to", end=" ")
# The remainders come out last digit first.
for digit in reversed(digits):
    print(digit, end="")
print()

print("Reszta z dzielenia przez 2:", division_remainder(number, 2))
print("Reszta z dzielenia przez 3:", division_remainder(number, 3))

if is_prime(number):
    print("To jest liczba pierwsza.")
else:
    print("To jest liczba złożona.")

# Sorted in place, the function returns nothing.
scores = [7, 2, 9, 4, 1]
insertion_sort(scores)
print("Posortowane wyniki:", scores)

# TU ZMIEŃ: dopisz tutaj własny kod, na przykład wypisz reszty z dzielenia przez 5 i przez 7
