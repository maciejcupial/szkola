# Task 3 of 4: withdraw() must refuse to go below zero.
# Expected:
# Wpłata 50.0 zł, saldo: 150.0 zł
# Wypłata 30.0 zł, saldo: 120.0 zł
# Za mało środków, saldo: 120.0 zł
# Właściciel: Ala
# Saldo: 120.0 zł


class BankAccount:

    def __init__(self, owner, balance):
        self.owner = owner
        self.balance = balance

    def deposit(self, amount):
        self.balance = self.balance + amount
        print("Wpłata", amount, "zł, saldo:", self.balance, "zł")

    def withdraw(self, amount):
        # A bare return ends the method early.
        # TU ZMIEŃ: dopisz warunek i komunikat, gdy na koncie jest za mało pieniędzy
        self.balance = self.balance - amount
        print("Wypłata", amount, "zł, saldo:", self.balance, "zł")


account = BankAccount("Ala", 100.0)
account.deposit(50.0)
account.withdraw(30.0)
account.withdraw(500.0)

print("Właściciel:", account.owner)
print("Saldo:", account.balance, "zł")
