# Task 1 of 4: class Product with price_with_tax() (23 % tax) and describe().
# Expected:
# 6.14
# 110.69
# Zeszyt: 4.99 zł netto, 6.14 zł brutto
# Plecak: 89.99 zł netto, 110.69 zł brutto

TAX_RATE = 0.23


class Product:

    def __init__(self, name, price):
        self.name = name
        self.price = price

    def price_with_tax(self):
        # Use round(value, 2), otherwise you get 6.137700000000001.
        # TU ZMIEŃ: zwróć cenę brutto zamiast zera
        return 0

    def describe(self):
        # TU ZMIEŃ: zwróć opis produktu zamiast znaku zapytania
        return "?"


notebook = Product("Zeszyt", 4.99)
backpack = Product("Plecak", 89.99)

print(notebook.price_with_tax())
print(backpack.price_with_tax())
print(notebook.describe())
print(backpack.describe())
