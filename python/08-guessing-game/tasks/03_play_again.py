# Task 3 of 3: play many rounds in a row.
# Expected: after a win „Grasz jeszcze raz? (t/n)”, answer „t” starts a new round.

import os
import random

seed = os.environ.get("GAME_SEED")
if seed is not None:
    random.seed(int(seed))


def play_one_game():
    number = random.randint(1, 100)
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
    return tries


play_one_game()

# lower() makes „T” count the same as „t”.

# TU ZMIEŃ: pętla while, która pyta „Grasz jeszcze raz? (t/n): ” i wywołuje play_one_game()
# tak długo, jak odpowiedzią jest „t”

print("Dzięki za grę!")
