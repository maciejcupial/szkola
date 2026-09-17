# Task 2 of three: add up every number from 1 to n.
# The student writes the loop that fills the "total" variable.
# The print() at the bottom already shows the result, so only the loop is missing.

number = int(input("Podaj n: "))

# The total starts at 0 because nothing has been added yet.
# Inside the loop the value grows: total = total + i adds the current number to what we had.
total = 0

# A for loop with range(1, number + 1) walks through 1, 2, ... up to number,
# because range() stops just before its second value. A while loop would work too.

# TU ZMIEŃ: pętla, która dodaje 1, 2, ..., n do zmiennej total

print("Suma liczb od 1 do", number, "to", total)
