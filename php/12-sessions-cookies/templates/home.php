    <section class="card">
      <h1>Strona, która Cię pamięta</h1>
      <?php if ($userName): ?>
        <p>Witaj, <?= htmlspecialchars($userName) ?>!</p>
        <form method="post" action="index.php">
          <button class="button" type="submit" name="logout" value="1">Wyloguj</button>
        </form>
      <?php else: ?>
        <p>Nie znam jeszcze Twojego imienia.</p>
        <form method="post" action="index.php">
          <label for="user-name">Imię</label>
          <input id="user-name" name="userName">
          <button class="button" type="submit">Zapisz</button>
        </form>
      <?php endif; ?>
    </section>

    <section class="card">
      <p>To Twoje wejście numer <?= $visitCount ?> (ciasteczko).</p>
      <p>Wszystkich wyświetleń tej strony: <?= $totalViews ?> (plik na serwerze).</p>
      <p class="meta">Zamknij całą przeglądarkę i wróć: imię zniknie, liczniki zostaną.</p>
    </section>
