# PHP: funkcje wbudowane

Do lekcji 11–12 kursu PHP (4Ti: lekcje 13–14).

`index.php` to karta stacji pogodowej zbudowana z gotowych funkcji PHP. Nazwa miasta wpisana
niechlujnie przechodzi przez `trim()` i `ucfirst()`, temperatura przez `round()`, odczyt zapisany jako
tekst przez `var_dump()`, `is_int()` i `gettype()`, a na końcu `date()` wypisuje datę pomiaru.
Nigdzie nie ma słowa `function`: wszystkie te funkcje PHP ma już w sobie, my je tylko wołamy.
W folderze `tasks` jest pięć stron do dokończenia, od najłatwiejszej do zadania dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie. Z XAMPP-em wrzuć go do `htdocs` i włącz Apache w panelu XAMPP.
2. Otwórz w przeglądarce `localhost/07-builtin-functions/index.php`. Zadanie otwierasz tak samo,
   na przykład `localhost/07-builtin-functions/tasks/01-clean-text.php`.
3. Bez XAMPP-a: otwórz terminal w folderze szablonu, wpisz `php -S localhost:8000` i wejdź na
   `localhost:8000/index.php` albo `localhost:8000/tasks/01-clean-text.php`.
4. Po każdej zmianie zapisz plik (Ctrl+S) i odśwież stronę w przeglądarce (F5).

## Co jest w plikach

- `index.php`: karta pogody. Funkcje na tekst (`trim`, `ucfirst`, `strtoupper`, `mb_strtoupper`,
  `str_replace`, `strlen` obok `mb_strlen`), funkcje na liczby (`round` z drugim argumentem i bez),
  typy (`var_dump`, `is_int`, `gettype`) i data (`date`).
- `tasks/01-clean-text.php`: porządki w nazwie produktu czterema funkcjami z lekcji 11.
- `tasks/02-receipt.php`: paragon, czyli `round()` do groszy i do złotówki, `var_dump()` i `date()`.
- `tasks/03-slug.php`: własna funkcja `makeSlug()`, która z tytułu wpisu robi adres strony.
- `tasks/04-types.php`: pięć wartości w pętli i pytanie, jakiego są typu.
- `tasks/05-username.php`: dla chętnych, funkcja `checkUsername()` sprawdzająca login według trzech zasad.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `index.php`: w miejscu `TU ZMIEŃ` na górze wpisz swoje miasto i temperaturę, a na dole strony dopisz
  własną linię.
- `tasks/01-clean-text.php`: zapisz do trzech zmiennych wyniki `trim()`, `strtoupper()`
  i `str_replace()`. Ma wyjść „Po zamianie: klawiatura bezprzewodowa”.
- `tasks/02-receipt.php`: zaokrąglij kwotę 47.456 do 47.46 i do 47, wpisz dwa wywołania `round()`,
  dodaj `var_dump()` i datę w formacie dzień.miesiąc.rok godzina:minuty.
- `tasks/03-slug.php`: dokończ `makeSlug()`. Z tytułu „ Moja Pierwsza Strona ” ma wyjść
  „moja-pierwsza-strona”.
- `tasks/04-types.php`: w pętli wypisz typ każdej wartości i policz liczby całkowite. Ma wyjść
  „Liczb całkowitych: 1 z 5”.
- `tasks/05-username.php`: dokończ `checkUsername()`. Login „żółw” ma dostać „OK, długość 4”.

Dokładny wynik, jaki ma pokazać przeglądarka, jest zawsze w komentarzu na górze pliku zadania.

## Częste błędy

- Wynik funkcji nigdzie nie zapisany: samo `trim($text);` nic nie zmienia, bo funkcja zwraca nowy
  tekst, a `$text` zostaje taki sam. Pisz `$trimmed = trim($text);`.
- `str_replace()` nic nie zamienia i nie ma żadnego błędu: argumenty są w złej kolejności. Najpierw
  czego szukać, potem na co zamienić, na końcu w czym szukać.
- `strlen("żółw")` daje 7, a nie 4: `strlen()` liczy bajty, a polska litera zajmuje dwa. Do liczenia
  znaków jest `mb_strlen()`.
- `strtoupper("kraków")` daje „KRAKóW”: zwykła wersja zmienia tylko litery od A do Z. Polskie litery
  zmienia `mb_strtoupper()`.
- `round(4.5)` daje 5, a nie 4: `round()` zaokrągla, a nie obcina. Dokładna połowa idzie w górę.
- W dacie zamiast minut pojawia się miesiąc: w `date()` litera `m` to miesiąc, minuty to `i`.
  Wielkość liter też się liczy, `Y` to cały rok, `y` tylko dwie ostatnie cyfry.
- `gettype(4.5)` wypisuje „double”, a nie „float”: to starsza nazwa tego samego typu, nie błąd.
- `Fatal error: Uncaught Error: Call to undefined function replace()`: w PHP nie ma funkcji
  `replace()`, zamianę robi `str_replace()`. Sprawdź nazwę funkcji litera po literze.
- `Fatal error: Cannot redeclare function makeSlug()`: funkcja o tej nazwie jest w pliku dwa razy.
  Zostaw jedną definicję.
