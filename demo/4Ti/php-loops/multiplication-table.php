<?php
// Lesson 8 (4Ti): model solution of exercise 1 (slide 9), the file students name multiplication-table.php.
// Expected: a 10x10 table with headers 1 to 10, then the powers of two 1, 2, 4, ... up to 512.
// Run: php -S localhost:8000 in this folder, open http://localhost:8000/multiplication-table.php
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabliczka mnożenia</title>
  <style>
    td, th { border: 1px solid #999; padding: 4px; }
    .even { background: #f0f0f0; }
  </style>
</head>
<body>
  <h1>Tabliczka mnożenia</h1>
  <table>
    <thead>
      <tr>
        <th></th>
<?php
// The header row is built by its own loop, before the main one.
// scope tells a screen reader whether a th describes a column or a row.
for ($col = 1; $col <= 10; $col++) {
    echo "        <th scope=\"col\">$col</th>\n";
}
?>
      </tr>
    </thead>
    <tbody>
<?php
for ($row = 1; $row <= 10; $row++) {
    // For fast students: every second row gets a class, so one style rule colours all of them.
    $rowClass = $row % 2 === 0 ? ' class="even"' : '';
    echo "      <tr$rowClass><th scope=\"row\">$row</th>";
    for ($col = 1; $col <= 10; $col++) {
        echo "<td>" . $row * $col . "</td>";   // the inner loop runs 10 times per row, 100 cells total
    }
    echo "</tr>\n";                            // the row closes after the inner loop, not inside it
}
?>
    </tbody>
  </table>

  <h2>Potęgi dwójki</h2>
<?php
$power = 1;
while ($power <= 1000) {
    echo "  " . $power . "<br>\n";   // echo first, then double: 1 2 4 8 16 32 64 128 256 512
    $power *= 2;                     // without this line the loop would never end
}
?>
</body>
</html>
