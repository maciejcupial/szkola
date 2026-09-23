<?php
// Lesson 25, slides 5-6: shared functions, prints nothing.

// 19.9 -> "19.90 zł"
function formatPrice($p) {
    return number_format($p, 2) . " zł";
}
