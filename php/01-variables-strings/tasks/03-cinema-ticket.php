<?php
// Task 3 of 5: calculate a cinema trip and show it in an HTML table.
// Expected (five rows, header cell then value):
//   Film                 Diuna
//   Cena biletu          29.99 zł
//   Liczba biletów       4
//   Bilety razem         119.96 zł
//   Razem z popcornem    138.45 zł

$movie = "Diuna";
$ticketPrice = 29.99;
$tickets = 4;
$popcornPrice = 18.49;

// TU ZMIEŃ: policz cenę wszystkich biletów (cena razy liczba biletów)
$ticketsTotal = 0;

// TU ZMIEŃ: policz kwotę razem z popcornem
$total = 0;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 3: bilety do kina</title>
  <style>
    th,
    td {
      border: 1px solid #999;
      padding: 4px 12px;
      text-align: left;
    }
  </style>
</head>
<body>
  <h1>Zadanie 3: bilety do kina</h1>
  <p>Policz, ile zapłacisz za bilety i popcorn, i pokaż wszystko w tabeli.
    Kwoty licz w zmiennych nad HTML, w tabeli tylko je wypisuj.</p>

  <table>
    <tr>
      <th>Film</th>
      <td><?= htmlspecialchars($movie) ?></td>
    </tr>
    <tr>
      <th>Cena biletu</th>
      <td><?= $ticketPrice ?> zł</td>
    </tr>
    <!-- TU ZMIEŃ: dopisz trzy wiersze: Liczba biletów, Bilety razem, Razem z popcornem -->
  </table>
</body>
</html>
