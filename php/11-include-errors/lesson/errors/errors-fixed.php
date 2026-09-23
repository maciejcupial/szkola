<?php
// Lesson 26, slide 9: errors-to-fix.php after all three fixes.
header("Content-Type: text/html; charset=UTF-8");

// Fix 1 (Parse error): missing semicolon; PHP names the line below.
$price = 19.90;
$discount = 0.10;   // unused, kept to match the slide
// Fix 2 (Warning): $quantity was never set.
$quantity = 3;

// Fix 3 (Fatal error): calculateTax() was missing.
function calculateTax($price) {
    return $price * 0.23;
}

$priceAfterDiscount = $price - $quantity;   // 16.9
$tax = calculateTax($price);                // 4.577

// Step 5, the note students add:
// błąd 1 (błąd składni): brakujący średnik po 19.90
// błąd 2 (ostrzeżenie): brakująca zmienna $quantity - dopisana
// błąd 3 (błąd krytyczny): brakująca funkcja calculateTax() - dopisana
?>
<p>Cena po rabacie: <?= $priceAfterDiscount ?> zł</p>
<p><?= $tax ?></p>
