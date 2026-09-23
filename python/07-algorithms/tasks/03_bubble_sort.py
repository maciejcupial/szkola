# Task 3 of 4: bubble sort, add the line that swaps two neighbours.
# Expected: Po sortowaniu: [1, 2, 3, 4, 5, 6, 7, 8, 9]


def bubble_sort(numbers):
    n = len(numbers)
    for i in range(1, n):
        # The last i values are already in place.
        for j in range(0, n - i):
            if numbers[j] > numbers[j + 1]:
                # Swap in one line: a, b = b, a

                # TU ZMIEŃ: zamień miejscami numbers[j] i numbers[j + 1]

                # pass keeps the block from being empty; delete it after the swap.
                pass


VALUES = [3, 9, 1, 8, 7, 2, 5, 4, 6]

print("Przed sortowaniem:", VALUES)
bubble_sort(VALUES)
print("Po sortowaniu:", VALUES)
