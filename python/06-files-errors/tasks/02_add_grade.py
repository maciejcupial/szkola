# Task 2 of 3: append one grade to grades.txt without losing the old ones.
# Expected (answer 5):
# 5
# 4
# 3
# 5
# 4
# 3
# 5

from pathlib import Path

grades_file = Path(__file__).parent / "grades.txt"

print("Jaką ocenę dopisać?")
grade = input()

# TU ZMIEŃ: otwórz grades_file w trybie dopisywania i zapisz w nim grade w nowej linii

print("Plik grades.txt po zmianie:")
with open(grades_file, "r", encoding="utf-8") as f:
    for line in f:
        print(line, end="")
