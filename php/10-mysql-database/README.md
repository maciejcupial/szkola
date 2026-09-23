# PHP: baza danych MySQL

Do lekcji 18–22 kursu PHP (4Ti: lekcje 20–24).

`index.php` to jedna strona sklepiku, która pracuje na tabeli `products`: łączy się z bazą,
pobiera produkty zapytaniem `SELECT` i pokazuje je w tabeli, dodaje nowy produkt z formularza
(`INSERT`), usuwa produkt przyciskiem (`DELETE`) i pokazuje komunikat, gdy zapytanie się nie uda.
Używa tych samych funkcji co lekcje i egzamin INF.03: `mysqli_connect()`, `mysqli_query()`,
`mysqli_fetch_assoc()`, `mysqli_affected_rows()`, `mysqli_insert_id()`, `mysqli_error()`.
W folderze `tasks` jest sześć zadań, od najłatwiejszego do najtrudniejszego. Ostatnie jest
dla chętnych.

Każdy plik ma ten sam układ. Na górze jest jeden blok PHP: łączy się z bazą, wykonuje zapytania,
przepisuje wiersze do tablicy i zamyka połączenie. Pod nim jest już tylko HTML, który wypisuje
gotowe zmienne przez `<?= ?>` i pętlę `foreach`. Na egzaminie INF.03 skrypt wstawiasz we wskazany
blok strony i tam obowiązuje ta sama kolejność: najpierw logika, potem wypisywanie.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. W panelu XAMPP kliknij Start przy Apache i przy MySQL. Obie usługi muszą świecić na zielono.
2. Wejdź na `http://localhost/phpmyadmin`, otwórz zakładkę SQL, wklej całą zawartość pliku
   `setup.sql` i kliknij „Wykonaj”. Powstanie baza `shop_tasks` z tabelą `products` i pięcioma
   produktami. To osobna baza, więc twoja baza `shop` z lekcji zostaje nietknięta.
3. Skopiuj cały folder do `htdocs` w XAMPP (Windows: `C:\xampp\htdocs`).
4. Otwórz `http://localhost/10-mysql-database/index.php`. Zadania otwierasz tak samo, na przykład
   `http://localhost/10-mysql-database/tasks/01-cheap-products.php`.
5. Zamiast Apache z XAMPP możesz użyć serwera wbudowanego w PHP: w terminalu, w folderze szablonu,
   wpisz `php -S localhost:8000` i otwórz `http://localhost:8000/index.php`. MySQL i tak musi być
   włączony.
6. Zadania dodają, zmieniają i usuwają wiersze. Gdy chcesz wrócić do danych startowych, wykonaj
   `setup.sql` jeszcze raz. Oczekiwane wyniki w nagłówkach zadań zakładają świeży import.

## Co jest w plikach

- `setup.sql`: tworzy bazę `shop_tasks`, tabelę `products` (`id`, `name`, `price`) i pięć produktów.
- `db.php`: połączenie z bazą w jednym miejscu. Każdy plik dołącza je na początku przez `require`
  i od tej chwili ma połączenie w zmiennej `$db`. O `require` więcej na lekcji 23.
- `index.php`: lista produktów w tabeli, formularz nowego produktu, przycisk „Usuń” przy każdym
  wierszu i komunikat błędu, gdy zapytanie `SELECT` się nie uda.
- `tasks/01-cheap-products.php`: produkty tańsze niż 10 zł, czyli `SELECT` z `WHERE`, pętla `while`
  do tablicy i lista z `foreach`.
- `tasks/02-products-table.php`: wszystkie produkty w tabeli, ich liczba i łączna wartość.
- `tasks/03-add-product.php`: formularz, który dodaje produkt i pokazuje jego nowy numer.
- `tasks/04-change-price.php`: zmiana ceny przez `UPDATE`, numer i cena przychodzą w adresie strony.
- `tasks/05-query-error.php`: funkcja, która przy złym zapytaniu zwraca komunikat z bazy, a przy dobrym
  wiersze. Strona pokazuje jedno albo drugie.
- `tasks/06-price-editor.php` (dla chętnych): edytor cen z listą rozwijaną zbudowaną z bazy.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `db.php`: w miejscu `TU ZMIEŃ` dane logowania, jeśli twój MySQL ma inne niż XAMPP
  (domyślnie serwer `localhost`, użytkownik `root`, puste hasło).
- `index.php`: w miejscu `TU ZMIEŃ` dopisz własną sekcję. Zapytanie idzie do bloku PHP na górze,
  a na dole strony tylko wypisujesz jego wynik.
- `tasks/01` do `tasks/06`: uzupełnij miejsca `TU ZMIEŃ`. W nagłówku każdego pliku jest opis
  zadania i dokładny wynik, który ma się pokazać w przeglądarce. Każdy plik da się otworzyć od razu,
  zanim cokolwiek dopiszesz: pokaże wtedy pustą listę albo zera.

Jedna rzecz jest tu inaczej niż na lekcji 20. Tam ćwiczenie wkleja dane z formularza prosto
do tekstu zapytania: `"INSERT INTO products (name, price) VALUES ('$name', '$price')"`. Wystarczy,
że ktoś wpisze w pole nazwy apostrof, i zapytanie się sypie, a ktoś złośliwy może w ten sposób
dopisać do niego własny kawałek SQL (to jest SQL injection, slajd 6 lekcji 20). Dlatego wszędzie,
gdzie do zapytania trafia coś od użytkownika, ten szablon używa zapytania przygotowanego:

```php
$stmt = mysqli_prepare($db, "INSERT INTO products (name, price) VALUES (?, ?)");
mysqli_stmt_bind_param($stmt, "sd", $name, $price);
mysqli_stmt_execute($stmt);
```

Znaki `?` to miejsca na wartości, a `"sd"` mówi, jakiego typu jest każda z nich po kolei:
`s` tekst, `d` liczba ułamkowa (na przykład cena), `i` liczba całkowita. Na egzaminie spotkasz
obie wersje, więc warto znać obie. We własnych projektach używaj tej z `?`.

## Częste błędy

- `Błąd połączenia z bazą danych.` razem z `Warning: mysqli_connect(): (HY000/2002)`: MySQL nie
  działa. Kliknij Start przy MySQL w panelu XAMPP.
- `Błąd połączenia z bazą danych.` razem z `Unknown database 'shop_tasks'`: nie ma bazy, bo
  `setup.sql` nie został wykonany. Wykonaj go w phpMyAdmin.
- `Błąd połączenia z bazą danych.` razem z `Access denied for user 'root'@'localhost'`: w XAMPP
  ustawiono hasło. Wpisz je w `db.php` w miejsce pustego `""`.
- `Fatal error: Uncaught TypeError: mysqli_fetch_assoc(): Argument #1 ($result) must be of type
  mysqli_result, false given`: zapytanie się nie udało, `mysqli_query()` zwróciło `false`, a kod
  i tak próbuje czytać wiersze. Sprawdź wynik przez `if (!$result)` i pokaż `mysqli_error($db)`,
  jak w zadaniu 5. Najczęściej to literówka w nazwie kolumny albo tabeli.
- `Warning: Undefined array key "nazwa"`: klucz w `$row["..."]` musi być dokładnie nazwą kolumny
  z tabeli, z tą samą wielkością liter. Tu kolumny nazywają się `name` i `price`.
- `Failed opening required` ze ścieżką kończącą się na `/../db.php`: plik zadania został wyjęty
  z folderu `tasks`. Zadania szukają `db.php` piętro wyżej, więc zostaw układ folderów bez zmian.
- `UPDATE` albo `DELETE` zmieniło wszystkie wiersze: w zapytaniu zabrakło `WHERE`. Wykonaj
  `setup.sql` jeszcze raz, żeby odzyskać dane, i dopisz `WHERE id = ?`.
- „Zmienionych wierszy: 0” to nie błąd. Znaczy, że żaden wiersz nie pasował do `WHERE` albo cena
  już była taka sama. Błąd zapytania to `false` z `mysqli_stmt_execute()` i opis w `mysqli_error($db)`.
- Polskie litery wyglądają jak `Å‚`: baza została założona bez `SET NAMES utf8mb4` albo `db.php`
  nie ma linii `mysqli_set_charset()`. Wykonaj `setup.sql` jeszcze raz i sprawdź `db.php`.
