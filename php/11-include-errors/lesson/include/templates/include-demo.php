<?php
// Lesson 25, slides 3-5 and 7: view with the notes of include.php.
?>
  <h2>Lekcja 25, slajd 3: jedna strona z trzech plików</h2>
  <p>Nagłówek „Sklep”, lista i stopka tej strony to osobne widoki z folderu templates.</p>
  <h2>Lekcja 25, slajd 4: brakujący plik, include kontra require</h2>
  <p>Otwórz missing-include.php, a potem missing-require.php i porównaj komunikaty.</p>
  <h2>Lekcja 25, slajd 5: require_once, ten sam plik tylko raz</h2>
  <p><?= htmlspecialchars($priceExample) ?></p>
  <p>Drugie dołączenie functions.php zostało pominięte, strona działa.</p>
  <h2>Lekcja 25, slajd 7: ścieżka z __DIR__</h2>
