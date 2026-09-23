# PHP i MySQL: lista, dodawanie, edycja, usuwanie

Mała aplikacja z bazą danych: pokazuje wpisy, dodaje nowy, zmienia istniejący i usuwa po
potwierdzeniu. Dane logowania do bazy są w jednym pliku, wygląd stron w dwóch wspólnych kawałkach.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. W panelu XAMPP włącz Apache i MySQL (obie usługi muszą mieć zielony status).
2. Wejdź na `http://localhost/phpmyadmin`, otwórz zakładkę SQL, wklej całą zawartość pliku
   `database.sql` i kliknij „Wykonaj”. Powstanie baza `school_crud` z tabelą `posts` i dwoma wpisami.
3. Skopiuj cały folder do katalogu `htdocs` w XAMPP (Windows: `C:\xampp\htdocs`).
4. Otwórz `http://localhost/mysql-crud/list.php`.

## Co jest w plikach

- `database.sql` : tworzy bazę `school_crud`, tabelę `posts` i przykładowe wiersze.
- `config.php` : połączenie z bazą, zmienna `$pdo` używana przez wszystkie strony.
- `header.php` : góra każdej strony, czyli nagłówek HTML, style i tytuł ze zmiennej `$pageTitle`.
- `footer.php` : dół każdej strony, zamyka znaczniki otwarte w `header.php`.
- `list.php` : tabela wszystkich wpisów plus linki do dodawania, edycji i usuwania.
- `add.php` : formularz nowego wpisu, zapisuje zapytaniem `INSERT`.
- `edit.php` : formularz wpisu wskazanego przez `?id=`, zapisuje zapytaniem `UPDATE`.
- `delete.php` : pytanie o potwierdzenie, a po kliknięciu „Tak, usuń” zapytanie `DELETE`.

## Co zmienić

- `config.php`: zmienne `$host`, `$database`, `$user`, `$password`, jeśli twoja baza ma inne dane
  (w XAMPP domyślnie użytkownik `root` bez hasła).
- `database.sql`: kolumny tabeli `posts` w miejscu oznaczonym `TU ZMIEŃ`. Po dopisaniu kolumny dodaj
  jej pole w `add.php` i `edit.php` oraz kolumnę tabeli w `list.php`.
- `add.php` i `edit.php`: zapytania `INSERT` i `UPDATE` muszą wymieniać te same kolumny co
  formularz, a liczba znaków `?` musi się zgadzać z liczbą wartości w `execute([...])`.
- `header.php`: blok `<style>`, w tym kolory w `:root` (`--accent`, `--background`, `--border`).
- Wszystkie zapytania korzystają z PDO i znaków `?` zamiast wklejania danych z formularza do SQL.
  Zostaw to tak: to jedyna ochrona przed SQL injection.

## Częste błędy

- `SQLSTATE[HY000] [1049] Unknown database` : nie ma bazy, czyli `database.sql` nie zostało wykonane
  albo w `config.php` jest inna nazwa niż w SQL. Wykonaj plik `database.sql` w phpMyAdmin.
- `SQLSTATE[HY000] [1045] Access denied for user 'root'@'localhost'` : użytkownik lub hasło się nie
  zgadzają. Jeśli ustawiałeś hasło w XAMPP, wpisz je w `config.php` do zmiennej `$password`.
- Biała pusta strona albo `Call to undefined function` : PHP zgłasza błąd, ale go nie wyświetla.
  Sprawdź `display_errors` w `php.ini` (powinno być `On`) albo zajrzyj do logu XAMPP
  `xampp\apache\logs\error.log`. Puste okno bez żadnego kodu PHP oznacza zwykle, że plik został
  otwarty podwójnym kliknięciem, a nie przez `http://localhost/`.
- Polskie litery pokazują się jako `?` albo krzaki : brakuje `charset=utf8mb4` w połączeniu w
  `config.php` albo tabela została stworzona bez `utf8mb4_polish_ci` z `database.sql`.
