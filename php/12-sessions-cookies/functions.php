<?php
// Model: the counters behind index.php. No HTML here, only values.

function nextVisitCount(?string $cookieValue): int
{
    if ($cookieValue === null) {
        return 1;
    }
    return intval($cookieValue) + 1;
}

function countView(string $file): int
{
    if (file_exists($file)) {
        $totalViews = intval(file_get_contents($file)) + 1;
    } else {
        $totalViews = 1;
    }
    file_put_contents($file, $totalViews);
    return $totalViews;
}
