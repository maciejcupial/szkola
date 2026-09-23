    <h2>Produkty</h2>
    <ul>
      <?php foreach ($productLines as $line): ?>
        <li><?= htmlspecialchars($line) ?></li>
      <?php endforeach; ?>
    </ul>
    <p>Razem: <strong><?= htmlspecialchars($total) ?></strong></p>

    <h2>Błąd złapany w try...catch</h2>
    <?php if ($divisionError === null): ?>
      <p>Wynik: <?= $divisionResult ?></p>
    <?php else: ?>
      <p class="error">Błąd: <?= htmlspecialchars($divisionError) ?></p>
    <?php endif; ?>
    <p>Strona działa dalej, bo błąd został złapany.</p>

    <h2>Jak czytać komunikat błędu</h2>
    <p>Każdy komunikat ma cztery części: typ, treść, plik i linię. Przykład:</p>
    <p><code>Warning: Undefined variable $total in C:\xampp\htdocs\sklep\index.php on line 12</code></p>
    <ul>
      <li>Warning: typ, strona działa dalej.</li>
      <li>Undefined variable $total: co się nie udało.</li>
      <li>index.php, linia 12: gdzie szukać w kodzie.</li>
    </ul>
