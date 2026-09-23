# PHP: include, require i błędy

Do lekcji 23–24 kursu PHP (4Ti: lekcje 25–26).

Od tego tematu każda strona PHP ma trzy rodzaje plików. Kontroler (`index.php`) zbiera dane
i wybiera, co pokazać. Model (`functions.php`) to funkcje, które liczą albo pytają bazę; niczego nie
wypisuje. Widoki (folder `templates`) to sam HTML, a w nim tylko `<?= ?>`, `foreach` i `if`. Tak samo
dzielą kod frameworki, na przykład Laravel: kontroler, model, widok.

`index.php` składa stronę sklepu z trzech widoków: `templates/header.php` (góra strony),
`templates/shop.php` (lista produktów) i `templates/footer.php` (stopka). Pokazuje też błąd
dzielenia przez zero złapany w `try...catch` i uczy czytać komunikat błędu: typ, treść, plik, linia.
W folderze `tasks` jest sześć zadań, od najłatwiejszego do najtrudniejszego. Ostatnie jest dla
chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do `htdocs` w XAMPP, włącz Apache i otwórz w przeglądarce
   `localhost/11-include-errors/index.php` (nazwa w adresie to nazwa folderu).
2. Bez XAMPP: otwórz terminal w folderze szablonu, wpisz `php -S localhost:8000` i otwórz
   `http://localhost:8000/index.php`.
3. Zadania otwierasz tak samo, na przykład `localhost:8000/tasks/01-split-page.php`.
   W zadaniu 5 są dwie strony: `05-home.php` i `05-contact.php`.
4. Pliki z folderów `templates` i `functions.php` nie są osobnymi stronami. Otwierasz zawsze
   kontroler, który je dołącza (`index.php`, `tasks/01-split-page.php` i tak dalej).

## Co jest w plikach

- `index.php`: kontroler. Dołącza `functions.php` przez `require_once`, liczy sumę cen, łapie
  `divide(10, 0)` w `try...catch` i na końcu dołącza trzy widoki.
- `functions.php`: model, funkcje `formatPrice()`, `sumPrices()` i `divide()`. Nic nie wypisuje.
- `templates/header.php`, `templates/shop.php`, `templates/footer.php`: widoki. Widzą zmienne
  ustawione w `index.php` przed ich dołączeniem, na przykład `$pageTitle`.
- `tasks/01-split-page.php` (+ `templates/01-*.php`): podział strony na kontroler i trzy widoki.
- `tasks/02-cart.php` (+ model `02-cart-functions.php`, widok `templates/02-cart.php`): funkcje
  koszyka w modelu.
- `tasks/03-find-warnings.php` (+ `templates/03-*.php`): znajdź i napraw błędy. Ten plik celowo
  wypisuje ostrzeżenia `Warning`, tak ma być, dopóki ich nie naprawisz.
- `tasks/04-grade-report.php`: średnie ocen i błąd dzielenia przez zero złapany w `try...catch`.
  Jeden plik: logika na górze, HTML pod nią.
- `tasks/05-home.php`, `tasks/05-contact.php` (+ model `05-functions.php`, widok
  `templates/05-layout.php`): jeden widok dla dwóch stron, tytuł i menu ze zmiennych.
- `tasks/06-router.php` (+ `templates/06-*.php` i folder `templates/06-pages`): dla chętnych.
  Kontroler wybiera widok podstrony wskazanej w adresie, na przykład `06-router.php?page=offer`.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze. `lesson/include`
  ma ten sam podział (kontrolery, model, `templates`), `lesson/errors` to pojedyncze pliki: logika
  na górze, HTML pod nią.

## Co zmienić

- `index.php`: w miejscu `TU ZMIEŃ` wpisz własny tytuł i własne produkty. Potem odkomentuj linię
  `$message = $missingVariable;`, przeczytaj komunikat i zakomentuj ją z powrotem.
- Zadanie 1: przenieś górę strony do `templates/01-header.php`, listę do `templates/01-products.php`,
  a stopkę do `templates/01-footer.php`. W kontrolerze zostają dane i trzy `require`. Strona ma
  wyglądać dokładnie tak samo jak przed podziałem.
- Zadanie 2: dopisz treść funkcji `lineTotal()` i `cartTotal()` w `02-cart-functions.php`.
  Do zapłaty ma wyjść 80,30 zł.
- Zadanie 3: czytaj ostrzeżenia po kolei i naprawiaj po jednym błędzie. Na końcu wypisz
  w komentarzu, co naprawiłeś. Razem ma wyjść 30.97 zł, bez żadnego ostrzeżenia.
- Zadanie 4: w pętli wywołaj `average()` w bloku `try`, a `DivisionByZeroError` złap w `catch`.
  Klasa 4C ma pokazać „Błąd: Division by zero”, a raport ma dojść do końca.
- Zadanie 5: w `templates/05-layout.php` wypisz `$pageTitle` w `<title>` i `<h1>` oraz zbuduj menu
  pętlą `foreach`, z pogrubionym linkiem bieżącej strony.
- Zadanie 6: w kontrolerze odczytaj `$_GET["page"] ?? "home"`, sprawdź nazwę w `$allowedPages`
  przez `in_array()` i ustaw `$view` na widok podstrony albo na `templates/06-not-found.php`.

Każdy kontroler zadania ma na górze komentarz z dokładnym wynikiem, który ma się pojawić
w przeglądarce.

## Częste błędy

- `Warning: include(templates/Header.php): Failed to open stream: No such file or directory`: zła
  nazwa pliku albo inny folder. Komunikat podaje nazwę, której PHP szukał, i numer linii z `include`.
  Na serwerze wielkość liter w nazwie ma znaczenie.
- `Fatal error: Uncaught Error: Failed opening required 'functions.php'`: to samo przy `require`,
  tylko strona zatrzymuje się w tym miejscu. Popraw nazwę pliku.
- `Fatal error: Cannot redeclare function formatPrice()`: plik z funkcjami wszedł do strony dwa
  razy. Dołączaj go przez `require_once`, nie przez `require`.
- Na stronie pojawia się tekst `echo "..."` albo `function ...` zamiast wyniku: w dołączanym
  pliku brakuje otwierającego `<?php`, więc PHP wysyła ten kod jako zwykły tekst.
- Nagłówek „Sklep” widać dwa razy: fragment skopiowany do widoku został też w kontrolerze.
  Po przeniesieniu usuń go z oryginału.
- `Warning: Undefined variable $pageTitle`: zmienna jest ustawiona dopiero za linią `require`
  widoku albo otwierasz sam widok zamiast kontrolera. Widok widzi tylko to, co ustawiono przed nim.
- `Parse error: syntax error`: literówka albo brak średnika. PHP wskazuje linię, w której zauważył
  problem, a brakujący średnik często stoi linię wyżej. Przy takim błędzie nie wykonuje się nic.
- Ostrzeżenia znikają po dopisaniu `error_reporting(0)`, ale błąd dalej jest, tylko go nie widać.
  Naprawiaj przyczynę, nie chowaj komunikatu. W starszych wersjach PHP część takich komunikatów
  nazywała się `Notice`; w PHP 8 to już `Warning`.
