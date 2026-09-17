# Formularz ze sprawdzaniem

Formularz zapisów, który przed wysłaniem sprawdza pola i pokazuje komunikat przy każdym źle
wypełnionym. Całe sprawdzanie siedzi w jednej funkcji w pliku `script.js`.

Komentarze w kodzie są po angielsku: tak wygląda kod w prawdziwych projektach, a każda linia jest
opisana.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Otwórz plik `index.html` w przeglądarce, na przykład podwójnym kliknięciem.
3. Kliknij „Wyślij” z pustymi polami. Pod każdym polem pojawi się komunikat.
4. Wypełnij poprawnie wszystkie pola i zaznacz zgodę. Zobaczysz zielony komunikat o poprawnych danych.

## Co jest w plikach

- `index.html` to formularz: pola, etykiety i puste miejsca na komunikaty.
- `style.css` to wygląd: kolory, odstępy, czerwone pole z błędem i zielony komunikat.
- `script.js` to sprawdzanie: funkcje `showError()` i `validate()` oraz obsługa wysyłki.
- `README.md` to ten opis.

## Co zmienić

- `script.js`, funkcja `validate()`: każda reguła to jeden `if`. Nowe reguły dopisujesz w miejscu
  oznaczonym `TU ZMIEŃ`, według wzoru z pól powyżej.
- `index.html`: nowe pole to kopia bloku `<div class="field">`. Nadaj polu własne `id`, a spanowi
  z komunikatem `id` według wzoru `error-<id pola>`, na przykład `error-city` dla pola `city`.
- `index.html`, znacznik `<title>` i nagłówek `<h1>`: nazwa Twojego formularza.
- `style.css`, blok `:root`: kolory całej strony, zmieniasz je w jednym miejscu.
- `script.js`, koniec pliku: gdy podepniesz prawdziwy skrypt w atrybucie `action`, usuń drugie
  wywołanie `event.preventDefault()`, żeby formularz naprawdę się wysyłał.

## Częste błędy

- Zamiast Twojego komunikatu wyskakuje dymek przeglądarki: w znaczniku `<form>` brakuje atrybutu
  `novalidate`. Bez niego przeglądarka zatrzymuje wysyłkę, zanim zadziała `validate()`.
- Komunikat pod polem nigdy się nie pojawia: `id` spana nie pasuje do pola. `showError()` skleja
  nazwę z `error-` i `id` pola, więc pole `age` wymaga spana o `id="error-age"`.
- Strona przeładowuje się i czyści pola po kliknięciu „Wyślij”: w obsłudze zdarzenia brakuje
  `event.preventDefault()`. Domyślną reakcją przeglądarki na wysyłkę formularza jest przeładowanie.
