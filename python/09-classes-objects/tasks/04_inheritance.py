# Task 4 of 4 (for volunteers): DiscountedProduct built on Product with super().
# Expected:
# Plecak: 89.99 zł netto, 110.69 zł brutto
# Cena po rabacie 20%: 88.55 zł
# Zeszyt: 4.99 zł netto, 6.14 zł brutto
# Cena po rabacie 10%: 5.53 zł

TAX_RATE = 0.23


class Product:

    def __init__(self, name, price):
        self.name = name
        self.price = price

    def price_with_tax(self):
        return round(self.price * (1 + TAX_RATE), 2)

    def describe(self):
        net = str(self.price) + " zł netto"
        gross = str(self.price_with_tax()) + " zł brutto"
        return self.name + ": " + net + ", " + gross


class DiscountedProduct(Product):

    def __init__(self, name, price, discount_percent):
        # TU ZMIEŃ: zamiast dwóch linii niżej wywołaj super().__init__(name, price)
        #           i zapamiętaj rabat w self.discount_percent
        self.name = name
        self.price = price
        self.discount_percent = 0

    def final_price(self):
        # Discount from the gross price: * (100 - discount_percent) / 100, then round.
        # TU ZMIEŃ: zwróć cenę brutto po rabacie zamiast ceny bez rabatu
        return self.price_with_tax()


backpack = DiscountedProduct("Plecak", 89.99, 20)
notebook = DiscountedProduct("Zeszyt", 4.99, 10)

# describe() is inherited from Product.
print(backpack.describe())
print("Cena po rabacie " + str(backpack.discount_percent) + "%:", backpack.final_price(), "zł")
print(notebook.describe())
print("Cena po rabacie " + str(notebook.discount_percent) + "%:", notebook.final_price(), "zł")
