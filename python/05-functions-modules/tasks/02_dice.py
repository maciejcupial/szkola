# Task 2 of 3: roll two dice ten times and count the doubles.
# Expected: ten lines like "Rzut 1 to 5 i 2", then "Dubletów: 2" (numbers are random)

import random

# Above the loop: inside it would reset every round
doubles = 0

for throw_number in range(1, 11):
    first = random.randint(1, 6)
    # TU ZMIEŃ: wylosuj drugą kostkę do zmiennej second i policz dublety w zmiennej doubles
    second = 1
    print("Rzut", throw_number, "to", first, "i", second)

print("Dubletów:", doubles)
