# Task 3 of 3: a division that survives a word and a zero.
# Expected:
# 12 and 4: Wynik: 3.0
# 12 and 0: Przez zero nie dzielimy.
# 12 and „cztery”: To nie jest liczba całkowita.

print("Podaj dzielną:")
first = input()
print("Podaj dzielnik:")
second = input()

# One try can have several except blocks, one per kind of error.
# TU ZMIEŃ: zamień first i second na liczby i podziel je w bloku try, a pod nim dopisz
# except ValueError oraz except ZeroDivisionError z komunikatami dla użytkownika
print("Tu pojawi się wynik dzielenia")
