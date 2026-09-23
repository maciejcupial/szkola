# PHP: pętle for, while i foreach

Do lekcji 06–07 kursu PHP (4Ti: lekcje 08–09).

`index.php` to strona szkolnego sklepiku zbudowana samymi pętlami: `for` robi cennik drożdżówek,
`while` liczy, na ile drożdżówek starczy pieniędzy, `do...while` wykonuje się raz mimo fałszywego
warunku, `break` i `continue` wybierają numerki z kolejki, a `foreach` wypisuje menu, cennik
z tablicy asocjacyjnej i tabelę zamówień z tablicy tablic. W folderze `tasks` jest sześć zadań, od
najprostszej pętli `for` do szachownicy z pętlą w pętli dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Z XAMPP: wklej folder do `htdocs` (na przykład `C:\xampp\htdocs\05-loops`), włącz Apache
   w panelu XAMPP i otwórz w przeglądarce `localhost/05-loops/index.php`.
3. Bez XAMPP: otwórz terminal w folderze szablonu, wpisz `php -S localhost:8000` i otwórz
   `http://localhost:8000/index.php`.
4. Zadania otwierasz tak samo, dopisując folder: `localhost/05-loops/tasks/01-times-table.php`
   albo `http://localhost:8000/tasks/01-times-table.php`.
5. Po każdej zmianie w pliku zapisz go (Ctrl+S) i odśwież stronę w przeglądarce (F5).

## Co jest w plikach

- `index.php`: wszystkie pętle na przykładzie sklepiku, po kolei `for`, `while`, `do...while`,
  `break` i `continue`, `foreach` po tablicy zwykłej i asocjacyjnej, pętla w pętli.
- `tasks/01-times-table.php`: jeden wiersz tabliczki mnożenia jako lista, pętla `for`.
- `tasks/02-piggy-bank.php`: skarbonka, pętla `while` liczy tygodnie oszczędzania.
- `tasks/03-free-seats.php`: wolne miejsca w kinie, `for` z `continue` i `break`.
- `tasks/04-temperatures.php`: temperatury tygodnia, `foreach` z numerem dnia, liczenie ciepłych dni
  i średnia.
- `tasks/05-price-list.php`: cennik sklepu jako tabela HTML, `foreach` po tablicy asocjacyjnej,
  różowe wiersze dla drogich produktów i suma cen.
- `tasks/06-chessboard.php`: dla chętnych, szachownica 8×8 z pętli w pętli.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `index.php`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własną pętlę.
- `tasks/01-times-table.php`: napisz pętlę `for` od 1 do 10. Dla liczby 7 ma wyjść dziesięć linii,
  od „7 × 1 = 7” do „7 × 10 = 70”.
- `tasks/02-piggy-bank.php`: napisz pętlę `while`, która dodaje kolejne tygodnie. Ma wyjść sześć
  tygodni, ostatni „Tydzień 6: 210 zł”, i zdanie „Cel 200 zł osiągnięty po 6 tygodniach.”
- `tasks/03-free-seats.php`: pomiń zajęte miejsca przez `continue`, zakończ pętlę przez `break`.
  Ma wyjść „Wolne miejsca: 1 2 5 6 7” i „Znaleziono 5 z 5 miejsc.”
- `tasks/04-temperatures.php`: dwa miejsca `TU ZMIEŃ`, pętla i średnia pod nią. Ma wyjść
  „Ciepłych dni: 3” i „Średnia temperatura: 13.71 °C”.
- `tasks/05-price-list.php`: pętla `foreach` z wierszami tabeli. Ser i kawa mają różowe tło,
  a pod tabelą „Razem: 54.39 zł”.
- `tasks/06-chessboard.php`: pętla w pętli pod gotowym wierszem z literami. Pole a8 w lewym górnym
  rogu jest jasne, a1 w lewym dolnym ciemne.

## Częste błędy

- Strona ładuje się bardzo długo, a potem pokazuje `Fatal error: Maximum execution time of 30 seconds
  exceeded`: pętla nieskończona. W `while` brakuje linii, która zmienia wartość z warunku (na przykład
  `$savings += $weekly;`). Zamknij kartę, dopisz tę linię i odśwież.
- `Parse error: syntax error, unexpected token ")", expecting ";"`: w nagłówku `for` stoją przecinki.
  Trzy części oddziela średnik: `for ($i = 1; $i <= 10; $i++)`.
- Na stronie widać słowo `Array` i `Warning: Array to string conversion`: `echo` dostał całą tablicę.
  Tablicę wypisujesz pętlą `foreach`, element po elemencie.
- `Warning: Undefined array key "items"` i zaraz pod nim `Warning: foreach() argument must be of type
  array|object, null given`: w środku pętli użyto nazwy całej tablicy (`$orders`) zamiast
  pojedynczego elementu (`$order`).
- Numeracja zaczyna się od 0: klucze tablicy zwykłej liczą się od zera, więc numer dnia to
  `$index + 1`, w nawiasie.
- Wiersz tabeli rozjeżdża się albo cała tabela ląduje w jednej linii: `</tr>` stoi wewnątrz
  wewnętrznej pętli. Wiersz zamykasz po niej, nie w niej.
- Średnia wychodzi na przykład 13.714285714286: brakuje `round(..., 2)`, drugi argument mówi,
  ile cyfr po kropce zostawić.
