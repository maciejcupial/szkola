# JavaScript: operatory

Do lekcji 05–06 kursu JavaScript (4Ti: lekcje 35–36).

`script.js` pokazuje po kolei wszystko z obu lekcji o operatorach: pięć działań (`+ - * / %`),
znak `+`, który raz dodaje, a raz skleja tekst, zamianę tekstu na liczbę przez `Number()`, skróty
`+= -= *= /=`, różnicę między `num1++` a `++num1`, porównania (`==` kontra `===`, `< > <= >=`)
i operatory logiczne `&&`, `||`, `!`. W folderze `tasks` jest sześć zadań, od najłatwiejszego
do najtrudniejszego. Ostatnie jest dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code.
2. Otwórz `index.html` w przeglądarce (dwuklik na pliku).
3. Wciśnij F12 i przejdź na zakładkę „Console”. Tam pojawiają się wszystkie wyniki, na stronie
   jest tylko instrukcja.
4. Zadanie otwierasz tak samo: dwuklik na przykład na `tasks/01-calculator.html`. Na stronie jest
   treść zadania i oczekiwany wynik, a kod piszesz w pliku `.js` o tej samej nazwie.
5. Po każdej zmianie zapisz plik (Ctrl+S) i odśwież stronę klawiszem F5.

## Co jest w plikach

- `index.html`: strona z instrukcją, która dołącza `script.js`.
- `script.js`: wszystkie operatory z lekcji, przy każdym `console.log` komentarz z wynikiem.
- `style.css`: wygląd strony głównej i stron z zadaniami.
- `tasks/01-calculator`: pięć działań na dwóch liczbach i część całkowita z dzielenia.
- `tasks/02-points`: punkty w grze zmieniane skrótami `+=`, `-=`, `*=`, `/=` i `++`.
- `tasks/03-form-text`: liczby zapisane jako tekst, tak jak przychodzą z formularza, i `Number()`.
- `tasks/04-quiz-score`: procent ze sprawdzianu i porównania, także `==` kontra `===`.
- `tasks/05-swimming-pool`: zasady wejścia na basen zapisane przez `&&`, `||` i `!`.
- `tasks/06-time-split`: dla chętnych, zamiana sekund na godziny, minuty i sekundy przez `/` i `%`.

## Co zmienić

- `script.js`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własne liczby i warunek.
- `tasks/01-calculator.js`: zamień każde `0` na działanie na `a` i `b`. Dla 23 i 4 ma wyjść
  27, 19, 92, 5.75, 3 i część całkowita 5.
- `tasks/02-points.js`: nad każdym `console.log` dopisz jedną linię ze skrótem, a przy `visits`
  wstaw `++` przed albo za zmienną. Wynik kończy się liczbami 7, 9 i 9.
- `tasks/03-form-text.js`: dodaj bilety po zamianie przez `Number()`, policz koszt i popraw
  ostatnią linię, żeby wypisała 6, a nie 51.
- `tasks/04-quiz-score.js`: zamień `0`, `true` i `false` na obliczenie albo porównanie.
  Procent ma wyjść 74, a trzy porównania kodu `true`, `false`, `true`.
- `tasks/05-swimming-pool.js`: zapisz warunki z tych zmiennych, które są w pliku. Z opiekunem
  wynik to `true`, bez opiekuna `false`.
- `tasks/06-time-split.js`: rozbij 7384 sekundy na 2 h 3 min 4 s i sprawdź wynik porównaniem.

## Częste błędy

- `17 / 5` daje `3.4`, a nie `3`: w JavaScript `/` nie ucina części po przecinku. Część całkowitą
  liczysz osobno, a resztę z dzielenia daje `%`.
- Zamiast `5` wychodzi `32`: w zmiennych jest tekst (liczba w cudzysłowie), więc `+` skleja.
  Zamień tekst na liczbę przez `Number()` przed dodawaniem.
- W konsoli widać `Z opiekunem: 51`: `+` działa od lewej do prawej, więc najpierw skleja tekst
  z liczbą, a potem dokleja `1`. Weź dodawanie w nawiasy: `(tickets + 1)`.
- `before` i `after` mają tę samą wartość: pomylone `visits++` i `++visits`. Znak za zmienną
  oddaje starą wartość, znak przed zmienną oddaje nową.
- `Uncaught TypeError: Assignment to constant variable.`: próbujesz zmienić stałą (`const`)
  skrótem `+=` albo `++`. Zmieniać można tylko zmienne `let`.
- `Uncaught SyntaxError: Invalid left-hand side in assignment`: po lewej stronie znaku `=` stoi
  coś innego niż nazwa zmiennej, na przykład `a + b = sum`. Nazwa zmiennej zawsze jest po lewej.
- Porównanie zawsze wychodzi prawdziwe albo zmienna nagle ma inną wartość: w porównaniu stoi
  jeden znak `=`. Jeden `=` wkłada wartość do zmiennej, porównanie to `===`.
- Warunek z `&&` odrzuca wszystkich: w zasadzie jest „albo”, więc potrzebne jest `||`. Przeczytaj
  warunek na głos: „i” to `&&`, „albo” to `||`.
- Konsola jest pusta: plik `.js` nie jest zapisany albo strona nie została odświeżona po zmianie.
  Zapisz plik i wciśnij F5.
