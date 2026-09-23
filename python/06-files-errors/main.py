# Files and errors: write, read, try/except.
# Lessons 15-16.

from pathlib import Path

# The file lands next to the script, wherever the terminal stands.
shopping_file = Path(__file__).parent / "shopping.txt"

products = ["chleb", "mleko", "masło"]

# "w" empties the file first, "a" would append.
with open(shopping_file, "w", encoding="utf-8") as f:
    for product in products:
        # write() adds no newline by itself.
        f.write(product + "\n")

print("Zapisano listę zakupów do pliku", shopping_file.name)

count = 0
with open(shopping_file, "r", encoding="utf-8") as f:
    for line in f:
        # The line already ends with "\n".
        print(line, end="")
        count = count + 1

print("Produktów na liście:", count)

while True:
    print("Ile produktów chcesz jeszcze dopisać?")
    try:
        extra = int(input())
        # Inside try, so a wrong answer does not end the loop.
        break
    except ValueError:
        print("To nie jest liczba całkowita. Spróbuj jeszcze raz.")

print("Lista urośnie do", count + extra, "pozycji.")

missing_file = Path(__file__).parent / "notes.txt"
try:
    with open(missing_file, "r", encoding="utf-8") as f:
        print(f.read(), end="")
except FileNotFoundError:
    print("Pliku", missing_file.name, "nie ma, ale program leci dalej.")

# TU ZMIEŃ: dopisz własny produkt do listy products albo zapisz do pliku jeszcze jedną linię
