# JavaScript: warunki i pętle

Do lekcji 07–10 kursu JavaScript (4Ti: lekcje 37–40).

`script.js` pokazuje na przykładzie małego kina wszystkie narzędzia sterujące z tego tematu:
drabinkę `if`, `else if`, `else`, warunek złożony z `&&` i `||`, instrukcję `switch`, operator
`? :`, pętle `for`, `while` i `do...while` oraz `break` i `continue`. Strona `index.html` tylko
ładuje skrypt, cały wynik widać w konsoli przeglądarki. W folderze `tasks` jest sześć zadań,
od najłatwiejszego do najtrudniejszego. Ostatnie jest dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie (na przykład do swojego repozytorium albo do `htdocs`).
2. Otwórz `index.html` w przeglądarce: dwuklik na pliku wystarczy, serwer nie jest potrzebny.
3. Wciśnij F12 (albo Ctrl+Shift+I) i przejdź na zakładkę `Console`. Odśwież stronę klawiszem F5,
   żeby zobaczyć wszystkie napisy od początku.
4. Zadanie otwierasz tak samo: na przykład `tasks/01-grade.html`. Strona pokazuje treść zadania
   i oczekiwany wynik, a kod piszesz w pliku `.js` o tej samej nazwie.
5. Po każdej zmianie w pliku `.js` zapisz go i odśwież stronę.

## Co jest w plikach

- `index.html` i `script.js`: przykład z objaśnieniami, siedem części podpisanych tak samo
  w kodzie i w konsoli. Obok każdego `console.log` jest komentarz z wynikiem.
- `style.css`: wspólny wygląd wszystkich stron z tego folderu.
- `tasks/01-grade`: ocena za sprawdzian z drabinki `else if` i warunku złożonego.
- `tasks/02-day-name`: nazwa dnia tygodnia przez `switch` i „weekend” albo „dzień szkolny”
  przez operator `? :`.
- `tasks/03-bum-bam`: gra „Bum Bam”, czyli pętla `for` z drabinką `if` i resztą z dzielenia `%`.
- `tasks/04-savings`: skarbonka napełniana pętlą `while`, co czwarty tydzień z dodatkiem.
- `tasks/05-even-sum`: suma liczb parzystych z `continue` i zatrzymaniem pętli przez `break`.
- `tasks/06-collatz`: dla chętnych, ścieżka liczby w pętli `do...while`.

## Co zmienić

- `script.js`: na końcu pliku, w miejscu `TU ZMIEŃ`, zmień `age` i `dayNumber` i sprawdź,
  które gałęzie się wykonają.
- `tasks/01-grade.js`: dopisz drabinkę, która wpisze ocenę do `grade`. Dla 78 punktów ma wyjść
  „dobry”.
- `tasks/02-day-name.js`: dopisz `switch` dla dni od 1 do 7 i jedną linię z operatorem `? :`.
  Dla dnia 6 ma wyjść „sobota, weekend”.
- `tasks/03-bum-bam.js`: dopisz pętlę `for` od 1 do 15. Linia „Koniec gry” zostaje na końcu.
- `tasks/04-savings.js`: dopisz pętlę `while`. Cel 300 zł ma paść po 7 tygodniach, z kwotą 335 zł.
- `tasks/05-even-sum.js`: dopisz ciało pętli. Pętla ma stanąć na liczbie 20 z sumą 110.
- `tasks/06-collatz.js`: dopisz pętlę `do...while`. Dla liczby 6 wychodzi 8 kroków.

W każdym pliku zadania nagłówek na górze podaje dokładny wynik, który ma się pojawić w konsoli.

## Częste błędy

- Karta przeglądarki zamarza i nic się nie wypisuje: pętla `while` nie ma kroku, więc warunek
  nigdy nie staje się fałszywy. Zamknij kartę, dopisz w środku pętli linię typu `week++`
  i otwórz stronę jeszcze raz.
- `Uncaught SyntaxError: Unexpected token 'else'`: przed `else` brakuje nawiasu klamrowego `}`,
  który zamyka blok `if`. Każdy `{` potrzebuje swojego `}`.
- `Uncaught SyntaxError: Unexpected end of input`: brakuje `}` na samym końcu, najczęściej po
  ostatnim bloku `else` albo po pętli.
- `Uncaught SyntaxError: Unexpected token '{'` w linii z `elseif`: w JavaScript piszemy `else if`,
  dwoma słowami. Jednym słowem pisze się tylko w PHP.
- `switch` wypisuje kilka nazw naraz, na przykład „sobota” i „niedziela”: w którymś `case`
  zabrakło `break`, więc kod przelał się do następnej gałęzi.
- `switch` zawsze trafia do `default`: w `case` stoi tekst `"6"`, a zmienna trzyma liczbę `6`.
  `switch` porównuje jak `===`, więc liczba i tekst to dla niego dwie różne wartości.
- Warunek zawsze się spełnia: w `if` stoi jeden znak `=`, na przykład `if (points = 100)`.
  Jeden `=` przypisuje wartość, do porównania służy `===`.
- „BumBam” nigdy się nie pojawia: warunek z samym `% 3` stoi nad warunkiem sprawdzającym oba
  dzielniki i wygrywa pierwszy. Kolejność w drabince ma znaczenie.
- Wynik jest zawsze 0 albo suma zaczyna się od nowa: `let sum = 0` trafiło do środka pętli.
  Zmienne, które zbierają wynik, deklarujemy nad pętlą.
- W zadaniu 6 pętla `do...while` wykonuje się raz, choć warunek od razu jest fałszywy: to nie
  błąd. Ta pętla najpierw wykonuje blok, a dopiero potem sprawdza warunek.
