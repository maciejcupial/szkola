# JavaScript: funkcje

Do lekcji 16–19 kursu JavaScript (4Ti: lekcje 46–49).

`index.html` i `script.js` pokazują cały temat funkcji w jednym miejscu: własną funkcję
z parametrami i `return`, funkcję wywołaną przyciskiem przez `onclick`, zmienne lokalne, które
nie wychodzą poza funkcję, oraz gotowe funkcje `parseFloat` i `Math`. W folderze `tasks` jest pięć
zadań, od najłatwiejszego do najtrudniejszego. Ostatnie jest dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code.
2. Otwórz `index.html` w przeglądarce: kliknij plik dwa razy albo przeciągnij go do okna Chrome.
   Serwer nie jest potrzebny.
3. Wciśnij F12 (albo Ctrl+Shift+I) i przejdź na zakładkę `Console`. Tam pojawiają się wszystkie
   wyniki, także te po kliknięciu przycisku.
4. Po każdej zmianie w pliku `.js` zapisz go (Ctrl+S) i odśwież stronę klawiszem F5.
5. Zadanie otwierasz tak samo: na przykład `tasks/01-rectangle.html`. Zmieniasz tylko plik `.js`
   o tej samej nazwie.

## Co jest w plikach

- `index.html`: trzy karty z polami i przyciskami, które wywołują funkcje ze `script.js`.
- `script.js`: pięć części. Własna funkcja (`squareArea`, `multiply`), funkcja wywołana przyciskiem
  (`add`, `absoluteValue`, `calculate`), zmienne lokalne (`fun1`, `showMessage`, `countGuests`),
  `parseFloat` oraz `Math.max`, `Math.min`, `Math.round` i `Math.pow`.
- `style.css`: wygląd wszystkich stron, także tych w `tasks`.
- `tasks/01-rectangle`: dwie funkcje z dwoma parametrami, pole i obwód prostokąta.
- `tasks/02-calculator`: kalkulator na czterech przyciskach, z ochroną przed dzieleniem przez zero.
- `tasks/03-leaking-variables`: program, który gubi dwie grupy, bo zmienne nie mają `let`.
- `tasks/04-game-scores`: wyniki zapisane jako teksty, zamiana przez `parseFloat` i liczenie przez `Math`.
- `tasks/05-grade-check`: dla chętnych, przycisk zamienia punkty ze sprawdzianu na procent i ocenę.

## Co zmienić

- `script.js`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własną funkcję z parametrem i `return`.
- `tasks/01-rectangle.js`: w obu funkcjach zamiast `return 0` zwróć pole i obwód. Dla 3 x 4 ma wyjść
  pole 12 i obwód 14.
- `tasks/02-calculator.js`: dokończ `subtract()`, `multiply()` i `divide()` na wzór `add()`.
  Dla 8 i 2 mają wyjść 6, 16 i 4, a dla 7 i 0 napis „Nie dzielimy przez zero”.
- `tasks/03-leaking-variables.js`: dopisz `let` w trzech miejscach. Konsola ma pokazać średnie
  trzech grup: 5, 2.5 i 4.5.
- `tasks/04-game-scores.js`: dokończ cztery funkcje. Najlepszy wynik to 95, najsłabszy 78,
  średnia po zaokrągleniu 87.
- `tasks/05-grade-check.js`: dokończ trzy funkcje. 42 z 50 punktów to 84% i ocena dobry.

Dokładny wynik, jaki ma pokazać konsola, jest w komentarzu na początku każdego pliku `.js` w `tasks`.

## Częste błędy

- W konsoli widać cały kod funkcji zamiast wyniku: brakuje nawiasów. `multiply` to tylko nazwa,
  dopiero `multiply(3, 4)` uruchamia funkcję.
- Funkcja liczy, a w konsoli jest `undefined`: w jej środku nie ma `return`. Bez `return` wynik
  zostaje w funkcji i przepada.
- `SyntaxError: Unexpected number`: w definicji wpisano liczby, na przykład `function multiply(3, 4)`.
  W definicji stoją nazwy parametrów, liczby podajesz dopiero przy wywołaniu.
- `ReferenceError: $a is not defined`: znak `$` przeniesiony z PHP. W JavaScript piszemy samo `a`.
- Kliknięcie przycisku nic nie robi, a konsola pokazuje `Uncaught ReferenceError: dodaj is not defined`:
  nazwa w `onclick` różni się od nazwy funkcji w pliku. Przeczytaj obie litera po literze.
- Kliknięcie nic nie robi i nie ma żadnego błędu: w `onclick` brakuje nawiasów, `onclick="add"`
  zamiast `onclick="add()"`.
- Dla 3 i 4 wychodzi 34 zamiast 7: brakuje `parseFloat`. `.value` zawsze daje tekst, a plus na dwóch
  tekstach je skleja.
- `Cannot read properties of null (reading 'value')`: `id` w `getElementById` różni się od `id` pola
  w HTML, na przykład `Number1` zamiast `number1`. `null` znaczy „nie znalazłem takiego elementu”.
- Wynik to `NaN`: pole jest puste albo zaczyna się od liter. `parseFloat` nie znalazł liczby.
  Przecinek też psuje wynik: `4,5` daje 4, w JavaScript piszemy `4.5`.
- `Math.round(-2.5)` daje -2, a nie -3: to nie błąd. JavaScript zaokrągla połówkę zawsze w górę,
  w stronę większych liczb.
- `TypeError: Math is not a constructor`: napisano `new Math()`. `Math` to gotowy zestaw funkcji,
  wywołujesz je wprost, na przykład `Math.max(4, 9)`.
