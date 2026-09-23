# Task 4 of 4: binary search in a sorted list, return the index or -1.
# Expected:
# Indeks liczby 61: 11
# Indeks liczby 62: -1
# Indeks liczby 4: 0


def binary_search(numbers, wanted):
    left = 0
    right = len(numbers) - 1

    # TU ZMIEŃ: pętla while, która połowi zakres i zwraca indeks szukanej liczby

    return -1


# Must stay sorted, otherwise halving does not work.
SORTED_NUMBERS = [4, 7, 12, 15, 21, 26, 33, 38, 44, 50, 57, 61, 68, 72, 80]

print("Indeks liczby 61:", binary_search(SORTED_NUMBERS, 61))
print("Indeks liczby 62:", binary_search(SORTED_NUMBERS, 62))
print("Indeks liczby 4:", binary_search(SORTED_NUMBERS, 4))
