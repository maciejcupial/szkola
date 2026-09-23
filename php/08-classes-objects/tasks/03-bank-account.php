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

    // Returns the text to show: the deposit or the refusal.
    public function deposit($amount) {
        // TU ZMIEŃ: gdy $amount jest mniejsze lub równe 0, zwróć
        // „Odmowa: kwota musi być większa od zera.” i nic nie zmieniaj.
        // W przeciwnym razie dodaj kwotę do salda i zwróć „Wpłata: 50 zł”
        return "";
    }

    public function withdraw($amount) {
        // TU ZMIEŃ: kwota zero albo ujemna: ta sama odmowa co w deposit().
        // Kwota większa niż saldo: zwróć „Odmowa: brak środków na wypłatę 500 zł.”
        // W pozostałych przypadkach odejmij kwotę od salda i zwróć „Wypłata: 30 zł”
        return "";
    }
}

$account = new BankAccount("Ola", 100);
$lines = [];
$lines[] = "Konto: " . $account->owner;
$lines[] = "Saldo: " . $account->getBalance() . " zł";

$lines[] = $account->deposit(50);
$lines[] = "Saldo: " . $account->getBalance() . " zł";
$lines[] = $account->withdraw(30);
$lines[] = "Saldo: " . $account->getBalance() . " zł";
$lines[] = $account->withdraw(500);
$lines[] = "Saldo: " . $account->getBalance() . " zł";
$lines[] = $account->deposit(-20);
$lines[] = "Saldo: " . $account->getBalance() . " zł";

// Fatal error: Cannot access private property BankAccount::$balance
// $account->balance = 1000000;
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
  <?php foreach ($lines as $line): ?>
    <p><?= htmlspecialchars($line) ?></p>
  <?php endforeach; ?>
</body>
</html>
