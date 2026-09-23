<?php
// Lesson 25, slide 8: view, the list. $products comes from the controller.
?>
  <ul>
    <?php foreach ($products as $product): ?>
      <li><?= htmlspecialchars($product["name"]) ?> - <?= $product["price"] ?> zł</li>
    <?php endforeach; ?>
  </ul>
