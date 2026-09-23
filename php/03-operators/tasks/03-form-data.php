<?php
// Task 3 of 5: compare form text with real numbers, == against ===.
// Expected:
//   "18" == 18: bool(true)
//   "18" === 18: bool(false)
//   "18" !== 18: bool(true)
//   "007" == 7: bool(true)
//   "007" === "007": bool(true)
//   18 >= 18: bool(true)
header("Content-Type: text/html; charset=UTF-8");

$ageFromForm = "18";
$codeFromForm = "007";
$age = 18;
$code = 7;

// TU ZMIEŃ: $ageFromForm == $age
$ageLoose = false;

// TU ZMIEŃ: $ageFromForm === $age
$ageStrict = false;

// TU ZMIEŃ: $ageFromForm !== $age (różne wartością lub typem)
$ageNotIdentical = false;

// TU ZMIEŃ: $codeFromForm == $code
$codeLoose = false;

// TU ZMIEŃ: $codeFromForm === "007"
$codeStrictText = false;

// TU ZMIEŃ: $age >= 18
$isAdult = false;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: dane z formularza</title>
</head>
<body>
  <h1>Zadanie 3: == czy ===?</h1>
  <p>
    Zanim uruchomisz stronę, zapisz na kartce, co pokaże każda linia. Potem wpisz porównania
    w miejsca TU ZMIEŃ i sprawdź, ile trafiłeś.
  </p>

  <p>"18" == 18: <?php var_dump($ageLoose); ?></p>
  <p>"18" === 18: <?php var_dump($ageStrict); ?></p>
  <p>"18" !== 18: <?php var_dump($ageNotIdentical); ?></p>
  <p>"007" == 7: <?php var_dump($codeLoose); ?></p>
  <p>"007" === "007": <?php var_dump($codeStrictText); ?></p>
  <p>18 >= 18: <?php var_dump($isAdult); ?></p>
</body>
</html>
