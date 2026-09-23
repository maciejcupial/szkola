# Strona WWW z arkuszem stylów

Prosta strona o sobie: nagłówek z menu, trzy sekcje, obraz i tabela z planem tygodnia.
Wygląd jest w osobnym pliku `style.css`, razem z wersją na telefon (reguła `@media`).

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Otwórz `index.html` w przeglądarce: podwójne kliknięcie albo Live Server w Visual Studio Code.
3. Zwęź okno przeglądarki poniżej 600 pikseli. Menu ułoży się w pionie, bo zadziała reguła `@media`.

## Co jest w plikach

- `index.html` - treść strony: nagłówek, menu, sekcje `about`, `interests`, `schedule`, stopka.
- `style.css` - kolory, układ i wersja na telefon.
- `photo.svg` - obraz pokazywany w sekcji „O mnie”.

## Co zmienić

- Szukaj `TU ZMIEŃ` w obu plikach. To są miejsca przygotowane do podmiany.
- `<title>` w `index.html` - nazwa widoczna na karcie przeglądarki.
- `<h1>` w `<header>` i akapit w sekcji `about` - nazwa strony i opis o sobie.
- Lista `<ul>` w sekcji `interests` - dopisz albo usuń pozycje `<li>`.
- Wiersze `<tr>` w `<tbody>` w sekcji `schedule` - własny plan tygodnia.
- Zmienne w `:root` w `style.css`: `--background`, `--text`, `--muted`, `--accent`, `--border`,
  `--card`. Zmieniasz jedną wartość, zmienia się cała strona.
- `font-family` w regule `body` - czcionka.
- `photo.svg` - podmień na własny plik o tej samej nazwie albo zmień `src` w `<img>`.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Częste błędy

- Strona wygląda jak surowy tekst, bez kolorów. Arkusz stylów się nie wczytał. Sprawdź, czy
  `style.css` leży w tym samym folderze co `index.html` i czy nazwa w `<link href="style.css">`
  zgadza się co do znaku, razem z wielkością liter.
- Zamiast obrazu widać samą ramkę z tekstem `alt`. Przeglądarka nie znalazła pliku. Nazwy plików
  nie mogą mieć polskich liter ani spacji, więc zamiast `moje zdjęcie.svg` użyj `photo.svg`.
- Menu nie chce się ułożyć w pionie, choć `@media` jest w pliku. Albo okno nie jest wystarczająco
  wąskie (warunek to `max-width: 600px`), albo w `<head>` brakuje linii z `meta name="viewport"`.
