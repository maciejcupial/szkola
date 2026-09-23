# Task 1 of 3: difficulty levels (range and limit of attempts).
# Expected (easy level): a number from 1 to 20, at most 5 attempts, then „Koniec prób. Liczba to ...”.

import os
import random

seed = os.environ.get("GAME_SEED")
if seed is not None:
    random.seed(int(seed))

top_number = 100
tries_limit = 10

# TU ZMIEŃ: zapytaj o poziom („ł” łatwy, „t” trudny) i ustaw top_number oraz tries_limit,
# łatwy: zakres do 20 i 5 prób, trudny: zakres do 100 i 10 prób

number = random.randint(1, top_number)
guess = 0
tries = 0

print("Zgadnij liczbę od 1 do", top_number)
print("Masz na to tyle prób:", tries_limit)

while guess != number and tries < tries_limit:
    text = input("Twoja liczba: ")
    try:
        guess = int(text)
        tries = tries + 1
        if guess < number:
            print("Za mało.")
        elif guess > number:
            print("Za dużo.")
    except ValueError:
        print("To nie jest liczba, wpisz ją cyframi.")

# Either condition could have stopped the loop.
if guess == number:
    print("Trafione! Liczba prób:", tries)
else:
    print("Koniec prób. Liczba to", number)
