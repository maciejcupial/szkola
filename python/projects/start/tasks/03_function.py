# Task 3 of 3: is_prime() returns True for a prime number.
# Expected: 2 3 5 7 11 13 17 19


def is_prime(number):
    # TU ZMIEŃ: zwróć True, gdy liczba jest pierwsza, w przeciwnym razie False
    return False


for candidate in range(2, 20):
    if is_prime(candidate):
        print(candidate, end=" ")

print()
