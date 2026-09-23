<?php
// Gym entrance: every conditional construct from the two lessons, parts 1-7.
header("Content-Type: text/html; charset=UTF-8");

// TU ZMIEŃ: wiek, rodzaj karnetu i liczbę wejść
$member = [
    "name" => "Ola",
    "age" => 17,
    "pass" => "student",        // one of: "open", "student", "senior", "morning"
    "visitsLeft" => 3,
];
$isOpen = true;

// 1. if ... else
if ($member["age"] >= 18) {
    $consentText = "Możesz trenować bez zgody rodzica.";
} else {
    $consentText = "Potrzebna zgoda rodzica.";
}

// 2. elseif ladder: highest threshold first, PHP stops at the first true one.
if ($member["visitsLeft"] >= 10) {
    $visitsText = "Masz jeszcze sporo wejść.";
} elseif ($member["visitsLeft"] >= 3) {
    $visitsText = "Wejścia się kończą, pomyśl o nowym karnecie.";
} elseif ($member["visitsLeft"] >= 1) {
    $visitsText = "To ostatnie wejście.";
} else {
    $visitsText = "Karnet wyczerpany.";
}

// 3. && || !
if ($isOpen && $member["visitsLeft"] > 0) {
    $gateText = "Bramka się otwiera.";
} elseif (!$isOpen) {
    $gateText = "Siłownia jest zamknięta.";
} else {
    $gateText = "Bramka zamknięta, doładuj karnet.";
}
if ($member["pass"] === "student" || $member["age"] < 18) {
    $discountText = "tak";
} else {
    $discountText = "nie";
}

// 4. switch: without break PHP falls through into the next case.
switch ($member["pass"]) {
    case "open":
        $price = 150;
        break;
    case "student":
    case "senior":
        $price = 99;
        break;
    case "morning":
        $price = 89;
        break;
    default:
        $price = 0;
}

// 5. match: strict (===), no break; without default a miss is UnhandledMatchError.
$passName = match ($member["pass"]) {
    "open" => "Open",
    "student" => "Studencki",
    "senior" => "Senior",
    "morning" => "Poranny",
    default => "Nieznany karnet",
};

// 6. ?:
$ageGroup = $member["age"] >= 18 ? "dorosły" : "niepełnoletni";

// 7. ??: no "trainer" key, so without ?? PHP warns "Undefined array key".
$trainer = $member["trainer"] ?? "bez trenera";
// Try index.php?name=Kuba
$greetName = $_GET["name"] ?? $member["name"];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Siłownia: warunki w PHP</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 640px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <!-- htmlspecialchars(): text from the address can never become HTML -->
  <h1>Cześć, <?= htmlspecialchars($greetName) ?>!</h1>

  <p>Wiek <?= $member["age"] ?> (<?= htmlspecialchars($ageGroup) ?>):
    <?= htmlspecialchars($consentText) ?></p>
  <p>Pozostałe wejścia <?= $member["visitsLeft"] ?>: <?= htmlspecialchars($visitsText) ?></p>
  <p>Bramka: <?= htmlspecialchars($gateText) ?></p>
  <p>Zniżka: <?= htmlspecialchars($discountText) ?></p>
  <p>Karnet: <?= htmlspecialchars($passName) ?>, <?= $price ?> zł miesięcznie.</p>
  <p>Trener: <?= htmlspecialchars($trainer) ?></p>
</body>
</html>
