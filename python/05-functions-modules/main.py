# Functions, modules and dictionaries: def, return, math, random, dict.
# Lessons 12-14.

# "from" imports one name (sqrt), "import" the whole module (random.randint)
from math import sqrt
import random


def area_of_square(side):
    """Zwraca pole kwadratu o podanym boku."""
    # return hands the result back; print() here would hand back None
    return side * side


def total_price(price, quantity):
    total = price * quantity
    return total


def greet(name, greeting="Cześć"):
    return greeting + ", " + name + "!"


print("Pole kwadratu o boku 5 to", area_of_square(5))
print("Pole kwadratu o boku 12 to", area_of_square(12))

print("Opis funkcji:", area_of_square.__doc__)

print("Cztery bułki po 3 zł kosztują", total_price(3, 4), "zł")

print(greet("Ala"))
print(greet("Bartek", "Dzień dobry"))

print("Pierwiastek z 25 to", sqrt(25))  # 5.0

# randint(1, 6) includes 6, unlike range(1, 6)
throw = random.randint(1, 6)
print("Rzut kostką:", throw)

prices = {"chleb": 4.50, "mleko": 3.20, "masło": 8.99}

print("Mleko kosztuje", prices["mleko"], "zł")
print("Produktów w cenniku:", len(prices))

# items() gives both the key and the value
for product, price in prices.items():
    print("Dwie sztuki, produkt", product, "to", total_price(price, 2), "zł")

# TU ZMIEŃ: dopisz własną funkcję, na przykład pole prostokąta, i wywołaj ją w print()
