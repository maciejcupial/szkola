# PHP: operatory

Do lekcji 03 kursu PHP (4Ti: lekcja 05).

`index.php` to kasa biletowa na koncert, w której każdy rodzaj operatora pojawia się raz: działania
na liczbach (`+ - * / % **` i `intdiv()`), kolejność działań z nawiasem, skróty `+=`, `.=`, `++`
i `--`, porównania `==` kontra `===` oraz logika `&&`, `||` i `!`. Na górze pliku PHP liczy wszystko
do zmiennych, a HTML na dole tylko je wypisuje. W folderze `tasks` jest pięć stron do dokończenia,
od najłatwiejszej do zadania dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Z XAMPP: wrzuć folder do `htdocs` (na przykład `C:\xampp\htdocs\03-operators`), włącz Apache
   w panelu XAMPP i otwórz w przeglądarce `http://localhost/03-operators/index.php`.
3. Bez XAMPP: w terminalu, stojąc w folderze szablonu, wpisz `php -S localhost:8000` i otwórz
   `http://localhost:8000/index.php`. Zadania są pod adresem `http://localhost:8000/tasks/01-pizza-party.php`
   i tak dalej.
4. Po każdej zmianie w pliku zapisz go i odśwież stronę (F5). Serwera nie trzeba restartować.

## Co jest w plikach

- `index.php`: kasa biletowa z cenami, rzędami miejsc, licznikiem odsłon, porównaniem danych
  z formularza i zasadami wejścia.
- `tasks/01-pizza-party.php`: dzielenie pizzy, czyli `*`, `intdiv()`, `%` i `round()`.
- `tasks/02-shopping-receipt.php`: paragon z pętlą `foreach`, w której działają `.=`, `++` i `+=`,
  a na koniec kupon przez `-=`.
- `tasks/03-form-data.php`: tekst z formularza kontra liczby, `==`, `===`, `!==` i `>=`.
- `tasks/04-concert-entry.php`: kto wejdzie na koncert, czyli `&&`, `||` i `!` na tablicy osób.
- `tasks/05-movie-marathon.php` (dla chętnych): maraton filmowy, zamiana minut na godziny,
  suma, średnia i sprawdzenie, czy wszystko zmieści się w jednym wieczorze.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `index.php`: na końcu bloku PHP, w miejscu `TU ZMIEŃ`, dopisz własne działanie, na przykład cenę
  pięciu biletów z opłatą serwisową, i wypisz je w HTML tak jak pozostałe wyniki.
- `tasks/01-pizza-party.php`: zamiast pięciu zer wpisz działania. Ma wyjść 24 kawałki, po 4 na
  osobę, 4 zostają, razem 127.5 zł, na osobę 25.5 zł.
- `tasks/02-shopping-receipt.php`: w pętli dopisz trzy linie (`.=`, `++`, `+=`), pod pętlą odejmij
  kupon. Ma wyjść „Paragon: chleb masło mleko jajka”, 4 produkty, suma 31 zł, po kuponie 26 zł.
- `tasks/03-form-data.php`: najpierw zapisz na kartce, co pokaże każda linia, potem zamień każde
  `false` na porównanie opisane nad nim i sprawdź, ile trafiłeś.
- `tasks/04-concert-entry.php`: w pętli zamień trzy `false` na warunki z listy na stronie. Ola
  wchodzi wszędzie i ma zniżkę, Kuba nie wchodzi, Marta nie stanie pod sceną, Pan Adam nie ma zniżki.
- `tasks/05-movie-marathon.php`: wszystkie miejsca `TU ZMIEŃ`, w pętli i pod nią. Ma wyjść
  „Razem: 6 h 44 min”, „Średnio: 134.7 min” i `bool(false)`, bo maraton trwa ponad 6 godzin.

Oczekiwany wynik każdego zadania jest też w komentarzu na początku pliku.

## Częste błędy

- `Fatal error: Uncaught TypeError: Unsupported operand types: string + int`: tekst skleja się
  kropką, nie plusem. `"Suma: " . $sum`, nie `"Suma: " + $sum`.
- `"Wynik: " . 2 + 3` wypisuje „Wynik: 5”, bo od PHP 8 kropka jest słabsza od plusa. Gdy nie
  jesteś pewien kolejności, dodaj nawias.
- `Fatal error: Uncaught DivisionByZeroError: Division by zero` (przy `%`: `Modulo by zero`):
  dzielisz przez zero, także przez `%` albo `intdiv()`. Sprawdź, co jest w dzielniku, na przykład
  czy tablica nie jest pusta.
- Liczba z przecinkiem tam, gdzie miała być całkowita: `/` daje wynik z częścią ułamkową, a pełne
  kawałki czy pełne godziny liczy `intdiv()`. Resztę daje `%`.
- `$height ^ 2` nie zgłasza błędu, tylko liczy coś zupełnie innego. Potęga w PHP to `**`.
- `=` zamiast `==` albo `===`: pojedynczy znak nie porównuje, tylko wpisuje wartość do zmiennej.
- Suma wychodzi równa ostatniej cenie: `$sum = 0;` trafiło do środka pętli i zeruje wynik przy
  każdym obiegu. Zmienna zbierająca wynik stoi nad pętlą.
- Na stronie widać `1` albo nic zamiast `true` i `false`: `echo` zamienia `true` na „1”, a `false`
  na pusty tekst. Typ i wartość pokazuje `var_dump()`.
