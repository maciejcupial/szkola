<?php
// Task 2: cart functions, only definitions.

// 39.8 -> "39,80 zł" (ready)
function formatPrice($price) {
    return number_format($price, 2, ",", " ") . " zł";
}

// lineTotal(19.9, 2) -> 39.8
function lineTotal($price, $quantity) {
    // TU ZMIEŃ: zwróć cenę pomnożoną przez liczbę sztuk zamiast 0
    return 0;
}

function cartTotal($cart) {
    $total = 0;
    // TU ZMIEŃ: foreach po $cart, dodaj do $total lineTotal() każdej pozycji
    return $total;
}
