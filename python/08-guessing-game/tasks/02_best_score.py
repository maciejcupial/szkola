# Task 2 of 3: keep the best score in a file.
# Expected: „Nowy rekord!” after a better game, next run shows „Dotychczasowy rekord: ...”.

import os
import random
from pathlib import Path

seed = os.environ.get("GAME_SEED")
if seed is not None:
    random.seed(int(seed))

SCORE_FILE = Path(__file__).parent / "best_score.txt"


# Returns None when there is no record yet.
def read_best_score():
    if not SCORE_FILE.exists():
        return None
    return int(SCORE_FILE.read_text(encoding="utf-8"))


def save_best_score(score):
    SCORE_FILE.write_text(str(score), encoding="utf-8")


best = read_best_score()
if best is None:
    print("Nie ma jeszcze rekordu.")
else:
    print("Dotychczasowy rekord:", best)

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

# TU ZMIEŃ: zapisz wynik save_best_score(tries), gdy best to None albo tries < best,
# i wypisz „Nowy rekord!”
