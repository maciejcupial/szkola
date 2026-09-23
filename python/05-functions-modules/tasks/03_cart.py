# Task 3 of 3: add up a basket using a price dictionary.
# Expected:
# Do zapłaty: 12.2 zł
# Do zapłaty: 24.19 zł

prices = {"chleb": 4.50, "mleko": 3.20, "masło": 8.99, "jajka": 12.00}


def cart_total(price_list, products):
    total = 0
    # TU ZMIEŃ: dodaj do total cenę każdego produktu z listy products (price_list[product])
    return total


print("Do zapłaty:", cart_total(prices, ["chleb", "mleko", "chleb"]), "zł")
print("Do zapłaty:", cart_total(prices, ["masło", "jajka", "mleko"]), "zł")
