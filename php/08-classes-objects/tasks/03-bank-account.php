<?php
// Task 3 of 5: bank account with a private balance changed only through methods.
// Expected:
//   Konto: Ola
//   Saldo: 100 zł
//   Wpłata: 50 zł
//   Saldo: 150 zł
//   Wypłata: 30 zł
//   Saldo: 120 zł
//   Odmowa: brak środków na wypłatę 500 zł.
//   Saldo: 120 zł
//   Odmowa: kwota musi być większa od zera.
//   Saldo: 120 zł
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: konto w banku</title>
</head>
<body>
  <h1>Zadanie 3: konto w banku</h1>
  <p>Saldo jest prywatne: nikt spoza klasy nie może go ustawić ręcznie. Napisz getBalance(),
    deposit() i withdraw(). Kwota zero albo ujemna ma być odrzucona, a wypłata większa niż saldo
    też.</p>
  <h2>Wynik</h2>
<?php
class BankAccount {
    public $owner;
    private $balance = 0;

    public function __construct($owner, $balance = 0) {
        $this->owner = $owner;
        $this->balance = $balance;
    }

    public function getBalance() {
        // TU ZMIEŃ: zwróć saldo tego konta zamiast zera
        return 0;
    }

    public function deposit($amount) {
        // TU ZMIEŃ: gdy $amount jest mniejsze lub równe 0, wypisz
        // „Odmowa: kwota musi być większa od zera.” i nic nie zmieniaj.
        // W przeciwnym razie dodaj kwotę do salda i wypisz „Wpłata: 50 zł”. Napisy kończ <br>
    }

    public function withdraw($amount) {
        // TU ZMIEŃ: kwota zero albo ujemna: ta sama odmowa co w deposit().
        // Kwota większa niż saldo: „Odmowa: brak środków na wypłatę 500 zł.”
        // W pozostałych przypadkach odejmij kwotę od salda i wypisz „Wypłata: 30 zł”
    }
}

$account = new BankAccount("Ola", 100);
echo "Konto: " . htmlspecialchars($account->owner) . "<br>";
echo "Saldo: " . $account->getBalance() . " zł<br>";

$account->deposit(50);
echo "Saldo: " . $account->getBalance() . " zł<br>";
$account->withdraw(30);
echo "Saldo: " . $account->getBalance() . " zł<br>";
$account->withdraw(500);
echo "Saldo: " . $account->getBalance() . " zł<br>";
$account->deposit(-20);
echo "Saldo: " . $account->getBalance() . " zł<br>";

// Fatal error: Cannot access private property BankAccount::$balance
// $account->balance = 1000000;
?>
</body>
</html>
