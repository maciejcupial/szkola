<?php
// Task 5 of 5 (dla chętnych): checkUsername() trims, lowercases and checks a login.
// Expected:
// [ Gracz01 ] → gracz01: OK, długość 7
// [ab] → ab: za krótki, długość 2
// [super gracz] → super gracz: zawiera spację
// [żółw] → żółw: OK, długość 4
// [BardzoDlugiLogin2030] → bardzodlugilogin2030: za długi, długość 20
header("Content-Type: text/html; charset=UTF-8");

$usernames = [" Gracz01 ", "ab", "super gracz", "żółw", "BardzoDlugiLogin2030"];

function checkUsername($username) {
    // Rules in order: space inside, under 3, over 12 characters. Count with mb_strlen().
    // TU ZMIEŃ: oczyść nazwę, sprawdź trzy zasady i zwróć jedną linię tekstu
    return "";
}

$results = [];
foreach ($usernames as $username) {
    $results[$username] = checkUsername($username);
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 5: sprawdzanie loginu</title>
</head>
<body>
  <h1>Zadanie 5 (dla chętnych): sprawdzanie loginu</h1>
  <p>Dokończ funkcję checkUsername(). Login bez spacji na brzegach i małymi literami musi mieć
    od 3 do 12 znaków i nie może mieć spacji w środku. Polska litera to jeden znak.</p>
  <ul>
    <?php foreach ($results as $username => $result): ?>
      <li>[<?= htmlspecialchars($username) ?>] → <?= htmlspecialchars($result) ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
