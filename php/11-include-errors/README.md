# PHP: include, require i błędy

Do lekcji 23–24 kursu PHP (4Ti: lekcje 25–26).

`index.php` składa jedną stronę z czterech plików: `header.php` (góra strony), `footer.php`
(stopka), `functions.php` (same definicje funkcji) i siebie samego (lista produktów). Pokazuje też
błąd dzielenia przez zero złapany w `try...catch` i uczy czytać komunikat błędu: typ, treść, plik,
linia. W folderze `tasks` jest sześć zadań, od najłatwiejszego do najtrudniejszego. Ostatnie jest
dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do `htdocs` w XAMPP, włącz Apache i otwórz w przeglądarce
   `localhost/11-include-errors/index.php` (nazwa w adresie to nazwa folderu).
2. Bez XAMPP: otwórz terminal w folderze szablonu, wpisz `php -S localhost:8000` i otwórz
   `http://localhost:8000/index.php`.
3. Zadania otwierasz tak samo, na przykład `localhost:8000/tasks/01-split-page.php`.
   W zadaniu 5 są dwie strony: `05-home.php` i `05-contact.php`.
4. Pliki dołączane (`header.php`, `01-header.php`, `05-layout-top.php` i podobne) nie są osobnymi
   stronami. Otwierasz zawsze plik, który je dołącza.

## Co jest w plikach

- `index.php`: strona sklepu złożona przez `include` i `require_once`, suma cen, `try...catch`
  wokół `divide(10, 0)` i przykład komunikatu `Warning`.
- `header.php`, `footer.php`: wspólna góra i dół strony. `header.php` czyta zmienną `$pageTitle`
  ustawioną w `index.php` przed dołączeniem.
- `functions.php`: funkcje `formatPrice()`, `sumPrices()` i `divide()`. Nic nie wypisuje.
- `tasks/01-split-page.php` (+ `01-header.php`, `01-footer.php`): podział strony na trzy pliki.
- `tasks/02-cart.php` (+ `02-cart-functions.php`): funkcje koszyka w osobnym pliku.
- `tasks/03-find-warnings.php` (+ `03-menu.php`): znajdź i napraw błędy. Ten plik celowo wypisuje
  ostrzeżenia `Warning`, tak ma być, dopóki ich nie naprawisz.
- `tasks/04-grade-report.php`: średnie ocen i błąd dzielenia przez zero złapany w `try...catch`.
- `tasks/05-home.php`, `tasks/05-contact.php` (+ `05-layout-top.php`, `05-layout-bottom.php`):
  jeden szablon dla dwóch stron, tytuł i menu ze zmiennych.
- `tasks/06-router.php` (+ folder `06-pages`): dla chętnych. Jeden plik pokazuje podstronę
  wskazaną w adresie, na przykład `06-router.php?page=offer`.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `index.php`: w miejscu `TU ZMIEŃ` wpisz własny tytuł i własne produkty. Potem odkomentuj linię
  `echo $missingVariable;`, przeczytaj komunikat i zakomentuj ją z powrotem.
- Zadanie 1: przenieś górę strony do `01-header.php`, a stopkę do `01-footer.php` i wstaw
  w ich miejsce `include`. Strona ma wyglądać dokładnie tak samo jak przed podziałem.
- Zadanie 2: dopisz treść funkcji `lineTotal()` i `cartTotal()` w `02-cart-functions.php`.
  Do zapłaty ma wyjść 80,30 zł.
- Zadanie 3: czytaj ostrzeżenia po kolei i naprawiaj po jednym błędzie. Na końcu wypisz
  w komentarzu, co naprawiłeś. Razem ma wyjść 30.97 zł, bez żadnego ostrzeżenia.
- Zadanie 4: w pętli wywołaj `average()` w bloku `try`, a `DivisionByZeroError` złap w `catch`.
  Klasa 4C ma pokazać „Błąd: Division by zero”, a raport ma dojść do końca.
- Zadanie 5: w `05-layout-top.php` wypisz `$pageTitle` w `<title>` i `<h1>` oraz zbuduj menu
  pętlą `foreach`, z pogrubionym linkiem bieżącej strony.
- Zadanie 6: odczytaj `$_GET["page"] ?? "home"`, sprawdź nazwę w `$allowedPages` przez
  `in_array()` i dołącz właściwy plik albo wypisz „Nie ma takiej strony.”.

Każdy plik zadania ma na górze komentarz z dokładnym wynikiem, który ma się pojawić w przeglądarce.

## Częste błędy

- `Warning: include(Header.php): Failed to open stream: No such file or directory`: zła nazwa
  pliku albo inny folder. Komunikat podaje nazwę, której PHP szukał, i numer linii z `include`.
  Na serwerze wielkość liter w nazwie ma znaczenie.
- `Fatal error: Uncaught Error: Failed opening required 'functions.php'`: to samo przy `require`,
  tylko strona zatrzymuje się w tym miejscu. Popraw nazwę pliku.
- `Fatal error: Cannot redeclare function formatPrice()`: plik z funkcjami wszedł do strony dwa
  razy. Dołączaj go przez `require_once`, nie przez `require`.
- Na stronie pojawia się tekst `echo "..."` albo `function ...` zamiast wyniku: w dołączanym
  pliku brakuje otwierającego `<?php`, więc PHP wysyła ten kod jako zwykły tekst.
- Nagłówek „Sklep” widać dwa razy: fragment skopiowany do `header.php` został też w starym pliku.
  Po przeniesieniu usuń go z oryginału.
- `Warning: Undefined variable $pageTitle`: zmienna jest ustawiona dopiero za linią `include`.
  Dołączany plik widzi tylko to, co ustawiono przed nim.
- `Parse error: syntax error`: literówka albo brak średnika. PHP wskazuje linię, w której zauważył
  problem, a brakujący średnik często stoi linię wyżej. Przy takim błędzie nie wykonuje się nic.
- Ostrzeżenia znikają po dopisaniu `error_reporting(0)`, ale błąd dalej jest, tylko go nie widać.
  Naprawiaj przyczynę, nie chowaj komunikatu. W starszych wersjach PHP część takich komunikatów
  nazywała się `Notice`; w PHP 8 to już `Warning`.
