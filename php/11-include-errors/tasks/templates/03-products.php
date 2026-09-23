<?php
// Task 3: view, product list and the rest of the page. This file is correct.
?>
  <ul>
    <?php foreach ($productLines as $line): ?>
      <li><?= htmlspecialchars($line) ?></li>
    <?php endforeach; ?>
  </ul>
  <p>Razem: <?= $total ?> zł</p>
</body>
</html>
