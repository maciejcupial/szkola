# Conditions: if, elif, else, comparisons and, or, not.
# Lessons 05-06.

points = int(input("Ile punktów zdobyłeś z testu? "))

# == compares, a single = assigns
print("Czy to komplet 100 punktów?", points == 100)

# The first True condition wins, so the order of thresholds matters
if points >= 90:
    print("Ocena: 5")
elif points >= 75:
    print("Ocena: 4")
elif points >= 50:
    print("Ocena: 3")
else:
    print("Ocena: 1")

age = int(input("Ile masz lat? "))

# has_card holds True or False, not text
has_card = input("Masz legitymację szkolną? (tak/nie) ") == "tak"

FULL_PRICE = 18

# age < 7: a seven year old already pays
free_ticket = age < 7 or age >= 70
print("Czy bilet jest darmowy?", free_ticket)

is_school_age = age >= 7 and age < 20
print("Czy to wiek szkolny?", is_school_age)

if free_ticket:
    price = 0
elif is_school_age and has_card:
    price = 9
else:
    price = FULL_PRICE

print("Cena biletu:", price, "zł")

if is_school_age:
    if not has_card:
        print("Bez legitymacji kasa policzy pełne", FULL_PRICE, "zł")
    else:
        print("Z legitymacją należy ci się bilet ulgowy.")

# TU ZMIEŃ: dopisz własny warunek, na przykład komunikat dla osób dokładnie w wieku 18 lat
