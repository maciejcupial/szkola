<?php
// Lesson 8, slide 9: exercise 1 solution.
// Expected: 10x10 table with headers 1-10, then powers of two 1 to 512.
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
// scope tells a screen reader if a th describes a column or a row.
for ($col = 1; $col <= 10; $col++) {
    echo "        <th scope=\"col\">$col</th>\n";
}
?>
      </tr>
    </thead>
    <tbody>
<?php
for ($row = 1; $row <= 10; $row++) {
    // For fast students.
    $rowClass = $row % 2 === 0 ? ' class="even"' : '';
    echo "      <tr$rowClass><th scope=\"row\">$row</th>";
    for ($col = 1; $col <= 10; $col++) {
        echo "<td>" . $row * $col . "</td>";
    }
    echo "</tr>\n";                            // after the inner loop, not inside it
}
?>
    </tbody>
  </table>

  <h2>Potęgi dwójki</h2>
<?php
$power = 1;
while ($power <= 1000) {
    echo "  " . $power . "<br>\n";   // 1 2 4 8 16 32 64 128 256 512
    $power *= 2;
}
?>
</body>
</html>
