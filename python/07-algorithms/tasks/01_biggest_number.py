# Task 1 of 4: find the biggest value in a series that ends with 0.
# Expected: Najdłuższy skok: 6.41 m

# The 0 at the end marks the end of data, it is not a result.
JUMPS = [6.20, 6.23, 6.34, 6.41, 6.14, 6.34, 0]

biggest = 0

position = 0
value = JUMPS[position]

while value != 0:
    # TU ZMIEŃ: sprawdź, czy value jest większe od biggest, i jeśli tak, zapisz je w biggest

    position = position + 1
    value = JUMPS[position]

print("Najdłuższy skok:", biggest, "m")
