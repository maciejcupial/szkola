<?php
// Task 3 of 5: order status in words with switch.
// new: Czeka na płatność, paid/packed: W przygotowaniu, sent: W drodze, cancelled: Anulowane,
// else: Nieznany status.
// Expected: Zamówienie nr 1042 dla Ola: W przygotowaniu.
// Also: "new", "sent", "xyz".
header("Content-Type: text/html; charset=UTF-8");

$order = [
    "id" => 1042,
    "customer" => "Ola",
    "status" => "packed",
];

$statusText = "";

// TU ZMIEŃ: switch, który ustawia $statusText; każdy case kończ break, default na końcu
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: status zamówienia</title>
</head>
<body>
  <h1>Zadanie 3: status zamówienia</h1>
  <p>Zamień kod statusu na słowa instrukcją <code>switch</code>. Statusy „paid” i „packed”
    dają ten sam tekst, więc zapisz je jako dwa <code>case</code> pod sobą.</p>
  <p>Zamówienie nr <?= $order["id"] ?> dla <?= htmlspecialchars($order["customer"]) ?>:
    <?= htmlspecialchars($statusText) ?>.</p>
</body>
</html>
