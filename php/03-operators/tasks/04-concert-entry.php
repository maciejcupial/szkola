<?php
// Task 4 of 5: decide who gets into a concert with &&, || and !.
// Expected (columns: Wejście, Pod sceną, Zniżka):
//   Ola bool(true) bool(true) bool(true)
//   Kuba bool(false) bool(false) bool(true)
//   Marta bool(true) bool(false) bool(true)
//   Pan Adam bool(true) bool(true) bool(false)
header("Content-Type: text/html; charset=UTF-8");

$visitors = [
    ["name" => "Ola", "age" => 19, "hasTicket" => true, "isStaff" => false],
    ["name" => "Kuba", "age" => 17, "hasTicket" => false, "isStaff" => false],
    ["name" => "Marta", "age" => 15, "hasTicket" => true, "isStaff" => false],
    ["name" => "Pan Adam", "age" => 45, "hasTicket" => false, "isStaff" => true],
];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Zadanie 4: wejście na koncert</title>
</head>
<body>
  <h1>Zadanie 4: kto wejdzie na koncert?</h1>
  <ul>
    <li>Wejście: bilet lub przepustka obsługi.</li>
    <li>Strefa pod sceną: prawo wejścia i co najmniej 16 lat.</li>
    <li>Zniżka: mniej niż 26 lat i nie jest z obsługi.</li>
  </ul>

  <table>
    <tr>
      <th>Osoba</th>
      <th>Wejście</th>
      <th>Pod sceną</th>
      <th>Zniżka</th>
    </tr>
    <?php
        // foreach (...): ... endforeach; is the same loop as with braces.
        foreach ($visitors as $visitor):
            // TU ZMIEŃ: bilet LUB obsługa (||)
            $canEnter = false;

            // TU ZMIEŃ: $canEnter I wiek co najmniej 16 (&&)
            $canStandFront = false;

            // TU ZMIEŃ: wiek poniżej 26 I NIE obsługa (&& oraz !)
            $hasDiscount = false;
    ?>
      <tr>
        <td><?= htmlspecialchars($visitor["name"]) ?></td>
        <td><?php var_dump($canEnter); ?></td>
        <td><?php var_dump($canStandFront); ?></td>
        <td><?php var_dump($hasDiscount); ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
