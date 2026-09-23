# JavaScript: skrypty i zmienne

Do lekcji 01–04 kursu JavaScript (4Ti: lekcje 31–34).

`index.html` i `script.js` pokazują w jednym przykładzie wszystko z pierwszych czterech lekcji:
skrypt wpisany w stronę i skrypt w osobnym pliku, kolejność, w jakiej się wykonują, `console.log`,
zmienne `var`, `let` i `const`, pięć podstawowych typów sprawdzanych przez `typeof`, spotkanie tekstu
z liczbą (`"5" + 3` kontra `"5" - 3`) i na koniec szablon tekstu z odwrotnymi apostrofami.
Strona prawie nic nie pokazuje, cały wynik jest w konsoli przeglądarki. W folderze `tasks` jest pięć
zadań, od najłatwiejszego do zadania dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie (na przykład do `htdocs` albo do folderu ze swoimi stronami).
2. Otwórz `index.html` w przeglądarce, wystarczy dwuklik na pliku. Serwer nie jest potrzebny.
3. Wciśnij F12 (albo Ctrl+Shift+I) i przejdź na zakładkę „Console”. Tam pojawia się wszystko,
   co wypisuje `console.log`, i tam widać czerwone komunikaty o błędach.
4. Odśwież stronę (F5), żeby zobaczyć wszystkie napisy od początku.
5. Zadanie otwierasz tak samo: dwuklik na `tasks/01-two-scripts.html` i konsola. Kod piszesz
   w pliku `.js` o tej samej nazwie, a po każdej zmianie zapisujesz plik i odświeżasz stronę.

## Co jest w plikach

- `index.html`: strona z instrukcją, skrypt wewnątrz strony na końcu `<body>` i dołączony pod nim
  `script.js`. W `<head>` jest zakomentowany przykład z atrybutem `defer`.
- `script.js`: `var x = 10; x++;`, zmienne `let`, dwie różnice między `var` a `let`, stała `const PI`,
  `typeof` dla pięciu typów, `"5" + 3`, `"pies" - 3` i szablon `${...}`. Obok każdej linii
  z `console.log` jest komentarz z tym, co ta linia wypisze.
- `style.css`: wspólny wygląd strony i zadań.
- `tasks/01-two-scripts.html` i `.js`: skrypt w stronie i w pliku, kolejność wykonania.
- `tasks/02-player-card.js`: stary kod z samym `var` do przepisania na `const` i `let`.
- `tasks/03-product-types.js`: produkt w sklepie opisany pięcioma typami, sprawdzenie przez `typeof`.
- `tasks/04-text-meets-number.js`: tekst z formularza plus liczba, minus liczba i `NaN`.
- `tasks/05-cinema-tickets.js`: zadanie dla chętnych, bilet sklejony plusem i szablonem `${...}`.

Każde zadanie to para plików: `.html` pokazuje polecenie na stronie, a `.js` ma na górze komentarz
z dokładnym wynikiem, który ma się pojawić w konsoli.

## Co zmienić

- `script.js`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własną stałą i zmienną i sprawdź ich typ.
- `tasks/01-two-scripts.html`: w miejscu `TU ZMIEŃ` dopisz `<script>` z jednym `console.log`,
  a w `01-two-scripts.js` trzecią linię. W konsoli mają się pojawić napisy 1, 2 i 3 po kolei.
- `tasks/02-player-card.js`: zamień każde `var` na `const` albo `let`. Wynik w konsoli ma zostać
  taki sam jak przed zmianą, bez czerwonego błędu.
- `tasks/03-product-types.js`: wpisz wartości z polecenia. Ma wyjść `string`, `number`, `boolean`,
  `undefined` i `object`.
- `tasks/04-text-meets-number.js`: dopisz odejmowanie i `"zeszyt"` minus liczba, za każdym razem
  wynik i jego `typeof`. Ma wyjść `123`, `string`, `9`, `number`, `NaN`, `number`.
- `tasks/05-cinema-tickets.js`: jedna zmienna musi dostać `let`, potem trzy bilety w konsoli,
  dwa pierwsze identyczne, trzeci z miejscem 13.

## Częste błędy

- W konsoli nic nie ma: konsola była otwarta dopiero po wczytaniu strony albo jest przewinięta.
  Odśwież stronę (F5) przy otwartej konsoli i sprawdź, czy filtr nad listą nie ukrywa napisów.
- `Uncaught ReferenceError: consol is not defined` z dopiskiem `01-two-scripts.js:11`: literówka
  w słowie `console`. Komunikat mówi, co się stało, a za dwukropkiem jest numer linii w pliku.
- `Uncaught TypeError: Assignment to constant variable.`: zmienna zapisana jako `const` dostaje
  dalej w pliku nową wartość albo `++`. Zmień `const` na `let`.
- `Uncaught SyntaxError: Identifier 'level' has already been declared`: tę samą nazwę zadeklarowano
  drugi raz przez `let`. Drugi raz piszesz samo `level = ...`, bez słowa `let`.
- `Uncaught SyntaxError: Missing initializer in const declaration`: `const` bez wartości. Przy `const`
  wartość wpisujesz w tej samej linii, na przykład `const PI = 3.14;`.
- Wynik `"123"` zamiast `15`: liczba jest w cudzysłowie, więc to tekst, a plus skleja teksty.
  Liczbę piszesz bez cudzysłowu.
- Szablon wypisuje dosłownie `${movieTitle}`: tekst jest w zwykłym cudzysłowie `"`. Szablon działa tylko
  w odwrotnych apostrofach `` ` ``, klawisz pod Esc.
- Skrypt w stronie się nie wykonuje, a konsola jest pusta: brakuje `</script>` albo kod trafił do
  znacznika z `src`. Znacznik z `src` zostaje pusty, własny kod idzie do osobnego `<script>`.
