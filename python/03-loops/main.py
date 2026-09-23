# Loops: while, break, for with range() and a countdown.
# Lessons 07-08.

print("Zbieramy jabłka. Kończymy, gdy na kupce będzie 300 sztuk.")
print("Wpisz 0, jeśli chcesz przerwać zbiórkę wcześniej.")

total = 0

while total < 300:
    count = int(input("Ile jabłek przynieśliście? "))

    # break leaves the loop at once, even though the condition is still True
    if count == 0:
        print("Zbiórka przerwana.")
        break

    # Without this line the condition never changes: an endless loop
    total += count
    print("Na kupce jest już tyle jabłek:", total)

print("Koniec zbiórki. Jabłek razem:", total)

number = int(input("Dla jakiej liczby wypisać tabliczkę mnożenia? "))

# range(1, 11) gives 1..10, it stops before the second number
for i in range(1, 11):
    print(number, "*", i, "=", number * i)

# A negative step counts down: 3, 2, 1
for second in range(3, 0, -1):
    print(second)

print("Start!")

# TU ZMIEŃ: dopisz własną pętlę, na przykład taką, która wypisze liczby parzyste od 2 do 20
