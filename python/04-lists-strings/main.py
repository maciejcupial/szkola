# Lists and strings: indexes, append(), in, loops over a list, slices, f-strings.
# Lessons 09-11.

grades = [4, 5, 3, 5, 2]
print("Oceny:", grades)

# Indexes start at 0, so the last one is len(grades) - 1
print("Liczba ocen:", len(grades))
print("Pierwsza ocena:", grades[0])

print("Ostatnia ocena:", grades[-1])

# append() returns None, so print(grades.append(6)) prints None
grades.append(6)
print("Po dopisaniu szóstki:", grades)

if 1 in grades:
    print("Jest jedynka do poprawy.")
else:
    print("Nie ma ani jednej jedynki.")

# grade is the value itself, not its position
total = 0
for grade in grades:
    total = total + grade

print("Suma ocen:", total)

print("Średnia ocen:", total / len(grades))

# Start from the first value, not 0: 0 breaks for negative values
biggest = grades[0]
for grade in grades:
    if grade > biggest:
        biggest = grade

print("Najwyższa ocena:", biggest)

name = input("Jak masz na imię? ")

print("Liczba liter:", len(name))
print("Pierwsza litera:", name[0])
print("Ostatnia litera:", name[-1])

# The right end of a slice is not included: [0:3] gives 3 letters
print("Trzy pierwsze litery:", name[0:3])

# upper() returns a new text, name itself does not change
print("Wielkimi literami:", name.upper())
print("Imię nadal wygląda tak:", name)

if "a" in name.lower():
    print("W tym imieniu jest litera a.")
else:
    print("W tym imieniu nie ma litery a.")

# Without the f before the quote the braces are printed as they are
print(f"{name} ma {len(name)} liter w imieniu i ocenę {grades[0]} na pierwszym miejscu.")

# TU ZMIEŃ: dopisz własny fragment, na przykład dopisz kolejną ocenę do listy i wypisz nową średnią
