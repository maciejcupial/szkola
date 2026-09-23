# Task 1 of 3: find the lowest and the highest temperature on a list.
# Expected:
# Najniższa temperatura to -8
# Najwyższa temperatura to 12

temperatures = [-3, 5, 0, -8, 12, 7]
print("Temperatury:", temperatures)

# Not 0: zero would never be beaten by a temperature below zero
lowest = temperatures[0]
highest = temperatures[0]

# TU ZMIEŃ: pętla for po liście temperatur, która poprawia lowest i highest

print("Najniższa temperatura to", lowest)
print("Najwyższa temperatura to", highest)
