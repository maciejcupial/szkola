# Task 2 of 3: decide whether a year is a leap year.
# Expected:
# Rok 2024 jest przestępny.
# Rok 1900 nie jest przestępny.
# Rok 2000 jest przestępny.

year = int(input("Podaj rok: "))

# Leap: divisible by 4 but not by 100, or divisible by 400
is_leap = False

# TU ZMIEŃ: ustaw is_leap na wynik warunku z and, or i not, zamiast na False

if is_leap:
    print("Rok", year, "jest przestępny.")
else:
    print("Rok", year, "nie jest przestępny.")
