# DOM: strona do ćwiczeń

Strona z gotowymi elementami do ćwiczenia DOM: wyszukiwania elementów po `id`, zmiany tekstu
i wyglądu, podmiany atrybutu, dodawania i usuwania elementów listy. W `script.js` jest po jednym
ponumerowanym przykładzie każdej operacji.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Otwórz `index.html` w przeglądarce (dwuklik na pliku).
3. Wciśnij F12 i przejdź na zakładkę „Console”, tam zobaczysz ewentualne błędy.
4. Klikaj kolejno wszystkie przyciski i obserwuj, co się zmienia na stronie.

## Co jest w plikach

- `index.html` - treść strony: nagłówek, akapit, obrazek, lista i rząd przycisków, każdy
  z własnym `id`.
- `style.css` - wygląd strony oraz klasa `.highlight`, którą włącza i wyłącza skrypt.
- `script.js` - sześć ponumerowanych przykładów operacji na DOM, po jednym na przycisk.
- `image-a.svg`, `image-b.svg` - dwa lokalne obrazki 240x120, między którymi przełącza przycisk
  „Podmień obrazek”.

## Co zmienić

- `index.html`: tytuł w `<title>`, tekst w `<h1 id="heading">` i w `<p id="description">`. Zostaw `id`,
  bo `script.js` szuka elementów właśnie po nich.
- `script.js` przykład 2: teksty przypisywane do `heading.textContent` i `description.textContent`.
- `style.css` reguła `.highlight`: kolory i wygląd wyróżnienia.
- `script.js` przykład 4: nazwy plików w `picture.src` i opisy w `picture.alt`, jeśli robisz
  własne obrazki.
- Na końcu `script.js` jest `TU ZMIEŃ`: dodaj własny `<button type="button" id="...">` w `index.html`
  i podepnij go przez `addEventListener` według wzoru powyżej.

## Częste błędy

- `Cannot read properties of null` w konsoli - `getElementById` nie znalazł elementu. Albo `id`
  w HTML i w JS różnią się literą, albo `<script>` stoi nad elementem. Ten `<script>` musi zostać
  na końcu `<body>`.
- Obrazek się nie podmienia - ścieżka w `picture.src` nie zgadza się z nazwą pliku. Pliki `.svg`
  muszą leżeć w tym samym folderze co `index.html`, a wielkość liter ma znaczenie.
- Nowe elementy nie pojawiają się na liście - `appendChild` został wywołany na złym rodzicu.
  Element `<li>` dodawaj do `list`, czyli do `<ul id="list">`, nie do `document.body`.
- Kliknięcie przycisku przeładowuje stronę - przycisk nie ma `type="button"`. Bez tego przycisk
  w formularzu domyślnie go wysyła.
