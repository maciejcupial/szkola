<?php
// Worked example: one page from four files, plus try...catch.
header("Content-Type: text/html; charset=UTF-8");

require_once "functions.php";

// Skipped, already loaded. Plain require: Fatal error: Cannot redeclare.
require_once "functions.php";

// TU ZMIEŃ: własny tytuł strony i własne produkty
// Set before the include: header.php reads $pageTitle.
$pageTitle = "Sklep";
$products = [
    ["name" => "Kubek", "price" => 19.90],
    ["name" => "Długopis", "price" => 4.20],
    ["name" => "Zeszyt", "price" => 6.50],
];

include "header.php";
?>
    <h2>Produkty</h2>
    <ul>
      <?php foreach ($products as $product): ?>
        <li>
          <?= htmlspecialchars($product["name"]) ?>: <?= htmlspecialchars(formatPrice($product["price"])) ?>
        </li>
      <?php endforeach; ?>
    </ul>
    <p>Razem: <strong><?= htmlspecialchars(formatPrice(sumPrices($products))) ?></strong></p>

    <h2>Błąd złapany w try...catch</h2>
    <?php
    try {
        echo "<p>Wynik: " . htmlspecialchars(divide(10, 0)) . "</p>";
    } catch (DivisionByZeroError $e) {
        echo '<p class="error">Błąd: ' . htmlspecialchars($e->getMessage()) . "</p>";
    }
    ?>
    <p>Strona działa dalej, bo błąd został złapany.</p>

    <h2>Jak czytać komunikat błędu</h2>
    <p>Każdy komunikat ma cztery części: typ, treść, plik i linię. Przykład:</p>
    <p><code>Warning: Undefined variable $total in C:\xampp\htdocs\sklep\index.php on line 12</code></p>
    <ul>
      <li>Warning: typ, strona działa dalej.</li>
      <li>Undefined variable $total: co się nie udało.</li>
      <li>index.php, linia 12: gdzie szukać w kodzie.</li>
    </ul>
    <?php
    // Warning: Undefined variable $missingVariable
    // echo $missingVariable;
    ?>
<?php
include "footer.php";
