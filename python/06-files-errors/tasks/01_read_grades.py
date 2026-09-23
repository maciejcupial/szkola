# Task 1 of 3: count the grades in grades.txt and print their average.
# Expected:
# Ocen: 6
# Średnia: 4.0

from pathlib import Path

grades_file = Path(__file__).parent / "grades.txt"

count = 0
total = 0

with open(grades_file, "r", encoding="utf-8") as f:
    for line in f:
        # int() ignores the "\n" at the end of the line.
        grade = int(line)
        # TU ZMIEŃ: zwiększ count o 1 i dodaj grade do zmiennej total

print("Ocen:", count)

if count > 0:
    print("Średnia:", total / count)
else:
    print("Średnia: brak ocen")
