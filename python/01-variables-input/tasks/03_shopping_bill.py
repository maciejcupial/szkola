# Task 3 of 3: a shop receipt with the total and the change.
# Expected (4.50, 3 items, 50):
# Do zapłaty: 13.5 zł
# Reszta: 36.5 zł

# float() needs a dot: "4,50" ends with an error
price = float(input("Cena jednej sztuki w złotych, z kropką, na przykład 4.50: "))
count = int(input("Ile sztuk? "))
banknote = int(input("Jakim banknotem płacisz? "))

total = 0.0
change = 0.0

# TU ZMIEŃ: policz sumę i resztę, każdy wynik przez round(..., 2)

print("Do zapłaty:", total, "zł")
print("Reszta:", change, "zł")
