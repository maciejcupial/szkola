# PHP: tablice zwykłe i asocjacyjne

Do lekcji 02 kursu PHP (4Ti: lekcja 04).

`index.php` to repertuar małego kina zapisany w tablicach. Lista filmów siedzi w tablicy zwykłej,
gdzie każdy element ma numer od zera. Bilet to tablica asocjacyjna, w której zamiast numerów są
podpisy, czyli klucze. Seanse to tablica w tablicy. Po drodze widać, jak dopisać nowy element,
policzyć elementy funkcją `count()`, podejrzeć całą tablicę przez `print_r()` i `var_dump()`
oraz wypisać ją pętlą `foreach`. W folderze `tasks` jest pięć plików do dokończenia, od
najłatwiejszego do zadania dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Z XAMPP: skopiuj cały folder `02-arrays` do `htdocs` (albo do swojego folderu w `htdocs`),
   uruchom Apache w panelu XAMPP i otwórz w przeglądarce `localhost/02-arrays/index.php`.
   Zadania otwierasz tak samo, na przykład `localhost/02-arrays/tasks/01-shopping-list.php`.
2. Bez XAMPP, z terminala: wejdź do folderu szablonu, wpisz `php -S localhost:8000`
   i otwórz `http://localhost:8000/index.php` albo `http://localhost:8000/tasks/01-shopping-list.php`.
3. Po każdej zmianie zapisz plik i odśwież stronę w przeglądarce (F5).
4. Wynik `print_r()` najlepiej widać w źródle strony: Ctrl+U w przeglądarce.

## Co jest w plikach

- `index.php`: filmy w tablicy zwykłej, pierwszy i ostatni film, dopisanie filmu na koniec,
  bilet w tablicy asocjacyjnej z nowym kluczem, podgląd przez `print_r()` i `var_dump()`,
  seanse jako tablica w tablicy.
- `tasks/01-shopping-list.php`: lista zakupów, dopisanie rzeczy, pierwsza i ostatnia rzecz,
  `count()` i lista numerowana.
- `tasks/02-player-card.php`: karta postaci z gry jako tablica asocjacyjna, nowy klucz,
  zdanie sklejone kropką, pary „klucz: wartość” i `print_r()`.
- `tasks/03-cart.php`: koszyk jako tablica w tablicy i paragon z mnożeniem ceny przez liczbę sztuk.
- `tasks/04-split-text.php`: tekst z miastami podzielony funkcją `explode()` i funkcje `mb_`
  z lekcji o zmiennych.
- `tasks/05-grade-book.php`: dla chętnych. Dziennik ocen, w którym każdy uczeń ma własną
  tablicę ocen. Liczysz sumę i średnią dwiema pętlami `foreach`, jedną w drugiej.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `index.php`: na początku wpisz własne filmy, a na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz
  czwarty seans.
- `tasks/01-shopping-list.php`: dopisz „ser”, uzupełnij `$firstItem`, `$lastItem`, `$itemCount`
  i napisz `foreach` w liście `<ol>`. Ma wyjść „Pierwsza rzecz: chleb”, „Ostatnia rzecz: ser”,
  „Rzeczy na liście: 5” i pięć pozycji na liście.
- `tasks/02-player-card.php`: dodaj klucz `"guild"`, sklej zdanie w `$sentence`, wypisz pary
  i wstaw `print_r()`. Ma wyjść „Kaktus to łucznik na poziomie 12.” i pięć par na liście.
- `tasks/03-cart.php`: dopisz linijkę do koszyka, odczytaj pierwszy produkt i policz
  `$lineTotal`. Pierwsza linia paragonu to „Zeszyt A5: 4 szt. po 2.5 zł = 10 zł”.
- `tasks/04-split-text.php`: podziel tekst przez `explode(",", $text)`, dopisz Poznań i wypisz
  miasta wielkimi literami. Ma wyjść „Miast na liście: 6” i na przykład „ŁÓDŹ (znaków: 4)”.
- `tasks/05-grade-book.php`: dopisz ocenę i ucznia, a w środku pętli napisz drugą pętlę
  po ocenach. Pierwsza linia to „Ola: 5 4 6 6 (ocen: 4, średnia: 5.25)”.

## Częste błędy

- Wypisuje się druga rzecz zamiast pierwszej: numeracja zaczyna się od 0. Pierwszy element to
  `$shoppingList[0]`, ostatni to `$shoppingList[count($shoppingList) - 1]`.
- `Warning: Undefined array key 5` albo `Undefined array key "gildia"`: w tablicy nie ma takiego
  numeru albo klucza. Najczęściej to literówka albo liczenie od jedynki. Wstaw na chwilę
  `print_r($player);` i zobacz, jakie klucze naprawdę są w tablicy.
- `Fatal error: Uncaught Error: Undefined constant "nick"`: klucz tekstowy bez cudzysłowu.
  Pisz `$player["nick"]`, nie `$player[nick]`.
- `Parse error: syntax error, unexpected token "="`: zła strzałka. Między kluczem a wartością
  stoi dokładnie `=>`, nie `=` ani `:`. Uważaj na `>=`: przejdzie bez błędu składni, ale zrobi
  porównanie zamiast pary klucz i wartość.
- `Parse error: syntax error, unexpected double-quoted string`: brakuje przecinka między
  elementami tablicy. Przecinek stawiasz po każdym elemencie, po ostatnim też wolno.
- `Warning: Array to string conversion` i samo słowo `Array` na stronie: `echo` nie umie wypisać
  całej tablicy. Do podglądu użyj `print_r()`, a do ładnego wypisania pętli `foreach`.
- `print_r()` wypisuje wszystko w jednej linii: brakuje znacznika `<pre>` dookoła albo patrzysz
  na stronę zamiast na jej źródło (Ctrl+U).
- „ŁÓDŹ (znaków: 7)” zamiast 4: użyto `strlen()`, który liczy bajty. Polska litera zajmuje dwa
  bajty, więc do polskiego tekstu bierz `mb_strlen()`.
