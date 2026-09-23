<?php
// Task 3 of 5: makeSlug($title) turns a post title into a web address.
// Expected:
// [ Moja Pierwsza Strona ] → moja-pierwsza-strona
// [Nauka PHP krok po kroku] → nauka-php-krok-po-kroku
// [ HTML i CSS ] → html-i-css
header("Content-Type: text/html; charset=UTF-8");

// No Polish letters on purpose: strtolower() changes only A to Z.
$titles = [" Moja Pierwsza Strona ", "Nauka PHP krok po kroku", " HTML i CSS "];

function makeSlug($title) {
    // trim() first, otherwise the edge spaces turn into dashes too.
    // TU ZMIEŃ: użyj trim(), strtolower() i str_replace() i zwróć gotowy adres
    return "";
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: adresy wpisów</title>
</head>
<body>
  <h1>Zadanie 3: adresy wpisów</h1>
  <p>Dokończ funkcję makeSlug(), która z tytułu wpisu robi adres: bez spacji na brzegach,
    małymi literami, z myślnikami zamiast spacji.</p>
  <ul>
    <?php
        foreach ($titles as $title) {
            $slug = makeSlug($title);
            echo "<li>[" . htmlspecialchars($title) . "] → " . htmlspecialchars($slug) . "</li>";
        }
    ?>
  </ul>
</body>
</html>
