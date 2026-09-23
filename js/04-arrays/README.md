# JavaScript: tablice

Do lekcji 11–13 kursu JavaScript (4Ti: lekcje 41–43).

`index.html` razem z `script.js` pokazuje w jednym miejscu wszystko z trzech lekcji o tablicach:
tworzenie tablicy, odczyt elementu po indeksie, `.length`, dopisywanie i zabieranie elementów
(`push()`, `pop()`, `unshift()`, `shift()`), szukanie i zamianę przez `indexOf()`, cięcie napisu
metodą `split()` oraz przechodzenie przez tablicę pętlami `for`, `for...of` i metodą `forEach()`.
W folderze `tasks` jest sześć zadań, od najłatwiejszego do najtrudniejszego. Szóste jest dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code.
2. Otwórz `index.html` w przeglądarce: dwuklik na pliku albo prawy przycisk i „Otwórz za pomocą”.
   Możesz też użyć rozszerzenia Live Server w Visual Studio Code.
3. Wciśnij F12 i przejdź na zakładkę `Console`. Tam jest cały wynik, strona pokazuje tylko instrukcję.
4. Zadanie otwierasz tak samo: na przykład `tasks/01-shopping.html` w przeglądarce, a obok
   w edytorze `tasks/01-shopping.js`. Po każdej zmianie zapisz plik i odśwież stronę klawiszem F5.

## Co jest w plikach

- `index.html`, `script.js`: przykład z objaśnieniem każdej linii, podzielony na trzy części,
  po jednej na każdą lekcję („Lesson 1”, „Lesson 2”, „Lesson 3”).
- `style.css`: wygląd wszystkich stron, także tych w `tasks`.
- `tasks/01-shopping`: lista zakupów, odczyt pierwszego i ostatniego elementu oraz długości.
- `tasks/02-queue`: kolejka do sklepiku, `push()`, `unshift()`, `shift()` i `pop()`.
- `tasks/03-timetable`: plan lekcji z napisu, `split()`, `indexOf()`, zamiana elementu i `if`.
- `tasks/04-grades`: oceny, pętla `for`, suma, średnia i liczenie ocen 4 i wyższych.
- `tasks/05-temperatures`: temperatury z tygodnia, `for...of`, najwyższa i najniższa wartość,
  nowa tablica ciepłych dni i `forEach()`.
- `tasks/06-vote`: dla chętnych, głosowanie klasy, pętla w pętli i wybór zwycięzcy.

Każde zadanie to para plików: strona `.html` z treścią zadania i oczekiwanym wynikiem oraz
skrypt `.js`, w którym piszesz kod. Każdy skrypt działa od razu, tylko wypisuje niedokończony wynik.

## Co zmienić

- `script.js`: na końcu pliku, w miejscu `TU ZMIEŃ`, utwórz własną tablicę i przejdź przez nią pętlą.
- W każdym zadaniu zmieniasz tylko miejsca oznaczone `TU ZMIEŃ` w pliku `.js`. Wynik w konsoli
  porównaj z ramką „W konsoli ma się pojawić” na stronie zadania. Ma się zgadzać co do znaku.
- W zadaniach 1 i 4 nie wpisuj liczb na sztywno: ostatni indeks i liczbę elementów bierzesz
  z `.length`, dzięki temu kod działa także po dopisaniu nowego elementu.

## Częste błędy

- W konsoli nic nie ma: konsola była otwarta dopiero po wczytaniu strony. Odśwież stronę klawiszem F5.
- Zamiast pierwszego elementu wychodzi drugi: indeksy liczymy od 0, więc pierwszy element to `[0]`.
- `undefined` zamiast ostatniego elementu: wpisane jest `shopping[shopping.length]`. Ostatni indeks
  to zawsze `length - 1`.
- Pętla wypisuje na końcu `undefined`: w warunku jest `i <= grades.length`. Ma być `i < grades.length`.
- Suma wychodzi taka jak ostatni element: `let sum = 0;` trafiło do środka pętli i zeruje wynik
  w każdym obiegu. Ta linia stoi nad pętlą.
- Napis zaczyna się od „undefined”: zmienna sklejająca nie dostała wartości początkowej `""`.
- `TypeError: Assignment to constant variable.`: próbujesz wpisać nową wartość do stałej `const`.
  Użyj `let`, jeśli wartość ma się zmieniać, na przykład dla `max` albo licznika.
- `TypeError: data.push is not a function`: `push()` wywołujesz na napisie, a nie na tablicy.
  Najpierw potnij napis metodą `split(",")`.
- Po kliknięciu strzałki przy tablicy widać inne elementy niż w skróconym wierszu: Chrome rozwija
  tablicę w jej obecnym stanie, już po wszystkich zmianach. Liczy się skrócony wiersz, na przykład
  `(5) ['Nauczycielka', 'Ola', 'Kuba', 'Zosia', 'Tomek']`, bo pokazuje stan z chwili wypisania.
- `SyntaxError: Unexpected token`: brakuje nawiasu albo przecinka, zwykle w klamrach pętli lub `if`.
  Konsola pokazuje po prawej nazwę pliku i numer linii, kliknij go, żeby zobaczyć to miejsce.
