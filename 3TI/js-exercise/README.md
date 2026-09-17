# Ćwiczenie z JavaScript

Strona z jednym polem na liczbę, przyciskiem i miejscem na wynik. Po kliknięciu przycisku
skrypt czyta wartość z pola, liczy i wpisuje wynik na stronę. Zmieniasz tylko jedną funkcję.

Komentarze w kodzie są po angielsku: tak wygląda kod w prawdziwych projektach, a każda linia jest opisana.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Otwórz `index.html` w przeglądarce, podwójnym kliknięciem albo przez Live Server.
3. Wpisz liczbę w pole i kliknij „Policz”. Pod przyciskiem pojawi się wynik.

## Co jest w plikach

- `index.html`: cała strona, czyli pole `input`, przycisk `button`, miejsce na wynik `result`
  i style w znaczniku `<style>`.
- `script.js`: kod, który obsługuje kliknięcie i wylicza wynik.
- `README.md`: ten opis.

## Co zmienić

- `script.js`, funkcja `compute(value)`: jedyne miejsce z obliczeniem, oznaczone „TU ZMIEŃ”.
  Teraz zwraca liczbę pomnożoną przez 2.
- `index.html`, znacznik `<title>` i nagłówek `<h1>`: nazwa i treść twojego zadania.
- Chcesz drugie pole? Skopiuj w `index.html` parę `<label>` i `<input>`, nadaj nowe `id`,
  a w `script.js` odczytaj je przez `document.getElementById` tak samo jak `input`.

## Częste błędy

- W wyniku widzisz „NaN”: w polu nie było liczby. `Number("abc")` nie umie zamienić tekstu
  na liczbę i zwraca właśnie „NaN”. Wpisz liczbę.
- Klikasz i nic się nie dzieje: albo `index.html` nie ładuje `script.js`, albo `id` w HTML
  różni się od tego w `script.js`. Wciśnij F12, zakładka „Console”, i przeczytaj błąd.
- Zamiast `4` wychodzi `22`: liczysz na tekstach, bo `input.value` to zawsze tekst,
  a plus sklejałby dwa teksty. Najpierw zamień wartość na liczbę przez `Number()`.
