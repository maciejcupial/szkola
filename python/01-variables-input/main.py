# Variables, input and arithmetic: printing, types, int() and operators.
# Lessons 01-04.

print("Kurs Pythona: pierwszy program")

print("Ala", "ma", 2, "koty")

print("Ala", "Ola", "Bartek", sep=", ")

# end=" " keeps the next print() on the same line
print("Zaczynamy", end=" ")
print("od powitania.")

# input() always returns text, even when the user types a number
name = input("Jak masz na imię? ")

print(name, "uczy się programowania.")

# Without int() "4" + "5" gives "45", with no error
ania_apples = int(input("Aniu, ile masz jabłek? "))
wojtek_apples = int(input("Wojtku, ile masz jabłek? "))

total_apples = ania_apples + wojtek_apples
print("Razem jabłek:", total_apples)

PLATES = 4

# // whole part of the division, % the remainder
apples_per_plate = total_apples // PLATES

apples_left = total_apples % PLATES
print("Na talerz:", apples_per_plate, "a w koszyku zostaje:", apples_left)

# / always gives a float, even for an exact division
average = total_apples / PLATES

print("Średnio na talerz:", round(average, 2))

print("Jabłka w 2 koszykach po tyle samo:", total_apples * 2)
print("Dwa do potęgi dziesiątej:", 2 ** 10)
print("Bez nawiasu:", 2 + 3 * 4, "a z nawiasem:", (2 + 3) * 4)  # 14, 20

price = 4.99
apples_are_enough = total_apples >= 15
print("Cena kilograma:", price, "zł")
print("Czy jabłek jest co najmniej 15?", apples_are_enough)

# TU ZMIEŃ: dopisz własne obliczenie, na przykład ile jabłek zostanie po zjedzeniu trzech
