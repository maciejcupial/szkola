# PHP: sesje, ciasteczka i zapis do pliku

Do lekcji 26 kursu PHP (4Ti: lekcja 89).

Zwykła strona PHP zapomina wszystko, gdy tylko wyśle odpowiedź: każde kliknięcie to nowe żądanie
i nowy skrypt. `index.php` pokazuje trzy sposoby, żeby coś zapamiętać. Imię z formularza trafia do
sesji (`session_start()`, `$_SESSION`, `session_destroy()`), licznik wejść tej przeglądarki do
ciasteczka (`setcookie()`, `$_COOKIE`), a licznik wszystkich wyświetleń do pliku na serwerze
(`file_get_contents()`, `file_put_contents()`). W folderze `tasks` jest sześć zadań, od
najłatwiejszego do najtrudniejszego; ostatnie, dla chętnych, powtarza cały kurs.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. XAMPP: wrzuć folder do `htdocs`, włącz Apache w panelu XAMPP i otwórz w przeglądarce
   `localhost/12-sessions-cookies/index.php`. Zadania otwierasz tak samo, na przykład
   `localhost/12-sessions-cookies/tasks/01-session-counter.php`.
3. Bez XAMPP-a: w terminalu wejdź do folderu szablonu i wpisz `php -S localhost:8000`, a potem otwórz
   `http://localhost:8000/index.php` albo `http://localhost:8000/tasks/01-session-counter.php`.
   Serwer zatrzymujesz klawiszami Ctrl+C.
4. Ciasteczka i identyfikator sesji (`PHPSESSID`) podejrzysz w przeglądarce: F12, zakładka
   „Application” (w Firefoksie „Dane”), sekcja „Cookies”.
5. Żeby sprawdzić, co przeżywa zamknięcie przeglądarki, zamknij wszystkie jej okna, nie samą kartę.
   Drugiego odwiedzającego udaje okno prywatne albo inna przeglądarka.

## Co jest w plikach

- `index.php`: imię w sesji z przyciskiem „Wyloguj”, licznik wejść w ciasteczku na 30 dni, licznik
  wszystkich wyświetleń w pliku `views.txt`.
- `tasks/01-session-counter.php`: licznik wejść w sesji i przycisk, który go zeruje.
- `tasks/02-name-form.php` i `tasks/02-name-greeting.php`: imię zapisane na jednej podstronie
  i powitanie na drugiej, z wylogowaniem.
- `tasks/03-theme-cookie.php`: jasny albo ciemny motyw zapamiętany w ciasteczku na rok.
- `tasks/04-cart.php`: koszyk w sesji i funkcja `cartTotal()`, która liczy wartość zakupów.
- `tasks/05-shared-counter.php`: licznik wspólny dla wszystkich w pliku `counter.txt` obok prywatnego
  licznika w sesji.
- `tasks/06-quiz.php`: dla chętnych. Quiz z trzema pytaniami, który pamięta w sesji, na którym
  pytaniu jesteś i ile masz punktów.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `index.php`: w miejscu `TU ZMIEŃ` możesz podać inną nazwę pliku z licznikiem.
- W każdym zadaniu uzupełnij miejsca `TU ZMIEŃ`. W komentarzu na górze pliku jest dokładnie to, co
  ma pokazać strona po kolejnych kliknięciach, oraz plik z podobnym kodem.
- `tasks/01-session-counter.php`: licznik w `$_SESSION["visitCount"]`, zerowanie przez `unset()`.
  Po trzech wejściach ma być „numer 3”, po kliknięciu przycisku znowu „numer 1”.
- `tasks/02-...`: `session_start()` w obu plikach, zapis imienia i wylogowanie przez `session_destroy()`.
- `tasks/03-theme-cookie.php`: odczyt `$_COOKIE["theme"]`, sprawdzenie, czy to dozwolony motyw,
  i zapis przez `setcookie()`.
- `tasks/04-cart.php`: dodawanie produktu do `$_SESSION["cart"]` i pętla w `cartTotal()`.
  Chleb dwa razy i mleko raz to razem 12,20 zł.
- `tasks/05-shared-counter.php`: odczyt, zwiększenie i zapis liczby w pliku oraz licznik w sesji.
- `tasks/06-quiz.php`: obie funkcje i cała logika quizu. Odpowiedzi `session_start`, `cookie`, `60`
  dają wynik 2 z 3.

## Częste błędy

- `Warning: session_start(): Session cannot be started after headers have already been sent` albo
  `Cannot modify header information - headers already sent`: przed `session_start()` lub `setcookie()`
  coś zostało wypisane. Może to być `echo`, kawałek HTML-a, a nawet pusta linia albo spacja przed
  `<?php`. Komunikat podaje numer linii, w której zaczęło się wypisywanie.
- Druga podstrona mówi „Nie znam Twojego imienia”, choć je zapisałeś: w tym pliku brakuje
  `session_start()`. Ta linia musi być w każdym pliku, który korzysta z `$_SESSION`.
- Ciasteczko „nie działa” po pierwszym kliknięciu: `$_COOKIE` zmienia się dopiero przy następnym
  wczytaniu strony. W tym samym żądaniu wypisuj zmienną, do której zapisałeś wartość, a nie `$_COOKIE`.
- Ciasteczko znika po zamknięciu przeglądarki: brakuje trzeciego argumentu `setcookie()`. To moment
  wygaśnięcia, na przykład `time() + 60 * 60 * 24 * 30`, a nie sama liczba dni.
- Po wylogowaniu imię wciąż jest na stronie: `session_destroy()` usuwa dane z serwera, ale tablica
  `$_SESSION` w tym jednym żądaniu dalej je ma. Wyczyść ją przez `$_SESSION = [];`.
- `Warning: file_get_contents(counter.txt): Failed to open stream`: pliku jeszcze nie ma. Sprawdź go
  najpierw przez `file_exists()`, tak jak w `index.php`.
- Nie możesz znaleźć pliku z licznikiem: nazwa bez ścieżki oznacza folder pliku PHP, który go zapisuje.
  `views.txt` leży obok `index.php`, a `counter.txt` w folderze `tasks`.
- W ciasteczku nie trzymamy hasła ani innych ważnych danych: leży na komputerze użytkownika, który
  może je podejrzeć i zmienić. Dlatego w zadaniu 3 wartość z ciasteczka sprawdzamy jak każde dane z zewnątrz.
