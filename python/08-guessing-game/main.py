# Guessing game: find a number from 1 to 100 with hints.
# Lesson 27.

import os
import random

# GAME_SEED=7 python3 main.py draws the same number every run (for tests).
seed = os.environ.get("GAME_SEED")
if seed is not None:
    random.seed(int(seed))

number = random.randint(1, 100)

# 0 is never drawn, so the loop runs at least once.
guess = 0
tries = 0

print("Zgadnij liczbę od 1 do 100.")

while guess != number:
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

print("Trafione! Liczba prób:", tries)

# TU ZMIEŃ: dopisz tutaj własny komunikat na koniec gry, na przykład pochwałę za mało prób
