# JavaScript: PHP jako API, JavaScript buduje stronę

Do lekcji 31 kursu JavaScript (4Ti: lekcja 90).

Do tej pory PHP sam składał gotową stronę HTML. Tutaj dzieli się pracą z JavaScriptem: plik
`api/products.php` pobiera produkty z tabeli `products` w bazie `shop` i odsyła je jako dane w formacie
JSON (ang. *JavaScript Object Notation*, zapis obiektów w JavaScripcie), bez żadnego znacznika HTML.
Strona `index.html` przychodzi pusta, a `script.js` pobiera te dane przez `fetch`, czeka na nie dzięki
`async` i `await` i buduje z nich listę przez `createElement` i `textContent`. Tak wygląda dziś wiele
aplikacji: serwer z danymi (backend) i osobno strona, która je pokazuje (frontend).
W folderze `tasks` jest pięć zadań, od najłatwiejszego do najtrudniejszego. Ostatnie jest dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. W panelu XAMPP kliknij Start przy Apache i przy MySQL. Obie usługi muszą świecić na zielono.
2. Potrzebujesz bazy `shop` z lekcji PHP o bazach danych. Jeśli jej nie masz albo chcesz wrócić do
   danych startowych, wejdź na `http://localhost/phpmyadmin`, otwórz zakładkę SQL, wklej całą zawartość
   pliku `setup.sql` i kliknij „Wykonaj”. Uwaga: import usuwa tabelę `products` i zakłada ją od nowa
   z trzema produktami.
3. Skopiuj cały folder do `htdocs` w XAMPP (Windows: `C:\xampp\htdocs`).
4. Otwórz `http://localhost/09-fetch-json/api/products.php`. Zobaczysz sam tekst JSON z produktami.
5. Otwórz `http://localhost/09-fetch-json/index.html`. Zobaczysz te same produkty jako listę.
   Zadania otwierasz tak samo, na przykład `http://localhost/09-fetch-json/tasks/01-product-list.html`.
6. Zamiast Apache z XAMPP możesz użyć serwera wbudowanego w PHP: w terminalu, w folderze szablonu,
   wpisz `php -S localhost:8000` i otwórz `http://localhost:8000/index.html`. MySQL i tak musi być
   włączony.
7. Strony otwieraj zawsze przez adres `http://localhost/...`, nie dwuklikiem. Plik otwarty z dysku nie
   uruchomi PHP, więc `fetch` nie dostanie danych.

## Co jest w plikach

- `setup.sql`: tworzy bazę `shop`, tabelę `products` (`id`, `name`, `price`) i trzy produkty.
- `db.php`: połączenie z bazą w jednym miejscu. Gdy się nie uda, odpowiada w JSON kodem 500.
- `api/products.php`: API, czyli adres, który zamiast strony zwraca dane. Pobiera produkty zapytaniem
  `SELECT`, zapisuje wiersze w tablicy, wysyła nagłówek `Content-Type: application/json` i zamienia
  tablicę na tekst przez `json_encode()`.
- `index.html` i `script.js`: pusta lista i funkcja `loadProducts()`, która pobiera dane, sprawdza
  `response.ok` i dopisuje każdy produkt jako `li`. Pod listą pokazuje liczbę produktów.
- `style.css`: wspólny wygląd wszystkich stron, także tych w `lesson` i `tasks`.
- `lesson/`: kod ze slajdów. `api/products.php`, `index.html` i `script.js` to najkrótsza wersja
  przykładu, a `text-vs-html` pokazuje tę samą nazwę wstawioną przez `textContent` i przez `innerHTML`.
- `tasks/01-product-list`: lista produktów z API i ich liczba, czyli ćwiczenie ze slajdów.
- `tasks/02-cheap-products`: tym razem piszesz stronę serwera, API z produktami tańszymi niż 10 zł.
- `tasks/03-products-table`: produkty w tabeli i ich łączna wartość.
- `tasks/04-load-button`: produkty wczytywane po kliknięciu przycisku, z komunikatem o błędzie.
- `tasks/05-add-product`: dla chętnych, formularz, który wysyła nowy produkt do API metodą `POST`
  w formacie JSON.

Zadania 1, 3, 4 i 5 to para plików: strona `.html` z treścią zadania i plik `.js`, który uzupełniasz.
W zadaniu 2 uzupełniasz plik `.php`. Na górze każdego pliku jest opis tego, co ma się pokazać.

## Co zmienić

- `script.js`: na końcu, w miejscu `TU ZMIEŃ`, dopisz pod listą łączną wartość produktów.
- `tasks/01-product-list.js`: dokończ `loadProducts()`. Strona pokazuje trzy produkty
  i „Produktów: 3”.
- `tasks/02-cheap-products.php`: dopisz zapytanie z `WHERE price < 10` i pętlę. Strona pokazuje
  Długopis i Zeszyt oraz „Tanich produktów: 2”.
- `tasks/03-products-table.js`: zbuduj wiersze tabeli i policz sumę. Pod tabelą jest „Razem: 30.60 zł”.
- `tasks/04-load-button.js`: podepnij pobieranie pod przycisk. Po dwóch kliknięciach na liście nadal
  są trzy produkty i napis „Wczytano produktów: 3”.
- `tasks/05-add-product.js`: wyślij formularz przez `fetch` z metodą `POST`. Po dodaniu „Linijka”
  za 2.40 produkt pojawia się na liście „Dodane teraz” i na stronie `index.html`.

## Częste błędy

- `Failed to fetch` albo `CORS` w konsoli, a lista jest pusta: strona jest otwarta dwuklikiem z dysku
  (adres zaczyna się od `file://`). Otwórz ją przez `http://localhost/...`.
- `SyntaxError: Unexpected token '<'` albo `is not valid JSON`: PHP zamiast JSON-a wysłał tekst, zwykle
  ostrzeżenie albo błąd. Otwórz sam plik PHP w przeglądarce, na przykład `api/products.php`,
  i przeczytaj, co tam jest napisane.
- W konsoli widać `Promise {<pending>}`, a nie dane: brakuje `await` przed `fetch(...)` albo przed
  `response.json()`. Oba wywołania potrzebują `await`.
- `SyntaxError: await is only valid in async functions`: `await` stoi w funkcji bez słowa `async`.
  Napisz `async function loadProducts()`.
- Nazwa produktu na liście jest pogrubiona albo znika: tekst trafił do `innerHTML`. Dane z serwera
  wstawiaj przez `textContent`, wtedy znaczniki w nazwie pokażą się jako zwykły tekst.
- Suma wychodzi `019.903.507.20`: cena przychodzi jako tekst i `+` skleja napisy. Zamień ją na liczbę
  przez `parseFloat(product.price)`.
- W zadaniu 5, po wysłaniu pustej nazwy, konsola pokazuje na czerwono `400 (Bad Request)`: to nie błąd
  w kodzie. Tak serwer odpowiada na złe dane, a Twój kod pokazuje wtedy komunikat z `data.error`.
- `404 (Not Found)` w konsoli: zła ścieżka w `fetch`. Ścieżka liczy się od strony HTML, dlatego
  w `tasks` jest `../api/products.php`, a w `index.html` samo `api/products.php`.
