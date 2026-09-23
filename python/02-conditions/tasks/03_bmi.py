# Task 3 of 3: a BMI calculator with four categories.
# Expected (60, 1.70):
# Twoje BMI to 20.76
# Kategoria: waga prawidłowa

weight = float(input("Ile ważysz w kilogramach, na przykład 60.5? "))
height = float(input("Ile masz wzrostu w metrach, na przykład 1.70? "))

bmi = round(weight / height ** 2, 2)
print("Twoje BMI to", bmi)

# Below 18.5 niedowaga, below 25 waga prawidłowa, below 30 nadwaga, else otyłość
category = "nieznana"

# TU ZMIEŃ: if / elif / else, który wpisze do category nazwę kategorii

print("Kategoria:", category)
