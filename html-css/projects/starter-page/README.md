# Strona startowa: HTML + CSS + JavaScript

Najprostszy zestaw trzech plików, które razem tworzą stronę WWW: treść, wygląd i działanie.
To jest punkt startowy, od którego zaczynasz własną stronę.

## Jak uruchomić

1. Skopiuj cały folder do swojego repozytorium.
2. Otwórz folder w Visual Studio Code.
3. Kliknij `index.html` prawym przyciskiem i wybierz „Open with Live Server” (albo otwórz plik
   w przeglądarce podwójnym kliknięciem).
4. Naciśnij F12 i wejdź w zakładkę „Console”, żeby zobaczyć wiadomość z pliku `script.js`.

## Co jest w plikach

- `index.html`: treść strony, czyli nagłówki, akapity, lista i przycisk. Ten plik otwierasz
  w przeglądarce i to on dołącza dwa pozostałe.
- `style.css`: wygląd, czyli kolory, czcionka, odstępy i ramki.
- `script.js`: działanie, czyli co się dzieje po kliknięciu przycisku.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Co zmienić

- `index.html`: tekst w `<title>`, nagłówek `<h1>`, akapity i lista w `<main>`, podpis w `<footer>`.
  Szukaj komentarzy `TU ZMIEŃ`.
- `style.css`: kolory w bloku `:root` (`--background`, `--text`, `--accent`) i czcionka w regule `body`.
- `script.js`: tekst powitania przypisywany do `greeting.textContent` oraz miejsce na własny kod
  na końcu pliku.

## Częste błędy

- Strona jest czarno-biała, style nie działają: sprawdź w `index.html` linię
  `<link rel="stylesheet" href="style.css">`. Plik CSS musi leżeć w tym samym folderze i nazywać się
  dokładnie `style.css`.
- Przycisk nic nie robi: `<script src="script.js"></script>` musi być na samym końcu `<body>`, tuż przed
  `</body>`. Jeśli jest wyżej, skrypt szuka przycisku, którego jeszcze nie ma. Sprawdź też nazwę pliku
  i błędy w konsoli (F12).
- Zamiast polskich liter widać krzaczki: w `<head>` musi być `<meta charset="UTF-8">`, a plik musi być
  zapisany w kodowaniu UTF-8. W Visual Studio Code kodowanie widać na dolnym pasku.
