# Task 2 of 4: a cart of products with total() and __str__.
# Expected:
# Produktów w koszyku: 3
# Do zapłaty: 16.69 zł
# Koszyk, produktów: 3, razem 16.69 zł


class Product:

    def __init__(self, name, price):
        self.name = name
        self.price = price


class Cart:

    def __init__(self):
        # Created here, so every cart gets its own list.
        self.products = []

    def add(self, product):
        self.products.append(product)

    def total(self):
        # Round the answer with round(value, 2).
        total = 0
        # TU ZMIEŃ: dodaj do total cenę każdego produktu z listy self.products
        return total

    # TU ZMIEŃ: dopisz metodę __str__(self), która zwróci tekst
    #           Koszyk, produktów: 3, razem 16.69 zł


cart = Cart()
cart.add(Product("Chleb", 4.50))
cart.add(Product("Mleko", 3.20))
cart.add(Product("Masło", 8.99))

print("Produktów w koszyku:", len(cart.products))
print("Do zapłaty:", cart.total(), "zł")
# Without __str__: <__main__.Cart object at 0x...>
print(cart)
