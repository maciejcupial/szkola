# PHP: zmienne i ciągi znaków

Do lekcji 01 kursu PHP (4Ti: lekcja 03).

`index.php` to karta jednej książki z biblioteki. Dane o książce siedzą w zmiennych czterech typów,
`var_dump()` pokazuje, co jest w każdej z nich, a tekst jest sklejany kropką, wstawiany
wprost w cudzysłów i przerabiany funkcjami do ciągów. Na górze pliku PHP składa cały tekst
w zmiennych, a HTML na dole tylko je wypisuje przez `<?= ... ?>`, czyli krótszy zapis
`echo`. W folderze `tasks` jest pięć plików do dokończenia, od najłatwiejszego do zadania
dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Uruchom XAMPP Control Panel i wciśnij **Start** przy module **Apache**.
2. Skopiuj cały folder do katalogu `htdocs`, tak żeby nazywał się `01-variables-strings`:
   - Windows: `C:\xampp\htdocs\01-variables-strings`
   - Mac: `/Applications/XAMPP/htdocs/01-variables-strings`
3. Wpisz w przeglądarce `http://localhost/01-variables-strings/`. Zadania otwierasz tak samo,
   na przykład `http://localhost/01-variables-strings/tasks/01-introduce.php`.
4. Bez XAMPP: w terminalu, stojąc w folderze szablonu, wpisz `php -S localhost:8000`
   i wejdź na `http://localhost:8000/`.
5. Po każdej zmianie w pliku wystarczy odświeżyć stronę.

## Co jest w plikach

- `index.php`: zmienne typu string, int, float i bool, `var_dump()`, sklejanie kropką,
  interpolacja w `"..."`, pułapka z apostrofami i z `+` kontra `.`, funkcje `strtoupper`,
  `str_replace`, `substr` oraz różnica między `strlen` a `mb_strlen`.
- `tasks/01-introduce.php`: typy czterech zmiennych i jedno zdanie sklejone kropką.
- `tasks/02-fix-output.php`: trzy linie, które działają, ale wypisują coś innego, niż powinny.
- `tasks/03-cinema-ticket.php`: rachunek za kino policzony w zmiennych i wypisany w tabeli HTML.
- `tasks/04-boarding-pass.php`: karta pokładowa z funkcjami `mb_` do polskich liter.
- `tasks/05-school-email.php`: dla chętnych, adres e-mail zbudowany z imienia i nazwiska.

## Co zmienić

- `index.php`: w miejscu `TU ZMIEŃ` wpisz dane swojej książki, a na końcu dopisz własną linię.
- `tasks/01-introduce.php`: dopisz cztery `var_dump()` i sklej zdanie w `$sentence`. Ma wyjść
  „Ola ma 17 lat i 1.65 m wzrostu.”
- `tasks/02-fix-output.php`: popraw trzy linie tak, żeby wyszło „Cześć, Kuba!”,
  „Mieszkasz w mieście Gdynia.” i „Za rok będziesz mieć 18 lat.”
- `tasks/03-cinema-ticket.php`: policz `$ticketsTotal` i `$total`, dopisz trzy wiersze tabeli.
  Za bilety wychodzi 119.96 zł, razem z popcornem 138.45 zł.
- `tasks/04-boarding-pass.php`: uzupełnij trzy zmienne na górze pliku. Kod lotu to „ŁÓD-WRO-204”,
  a imię i nazwisko ma 15 znaków i 16 bajtów.
- `tasks/05-school-email.php`: zbuduj adres „mikolaj.wojcik@example.com”, jego długość to 26,
  litera „o” występuje w nim 3 razy.

## Częste błędy

- **`Parse error: syntax error, unexpected ...`**: brakuje średnika na końcu linii albo kropki
  między kawałkami tekstu. Numer linii z komunikatu wskazuje tę linię albo tę tuż nad nią.
- **`Warning: Undefined variable $Name`**: raz napisałeś `$name`, raz `$Name`. Wielkość liter
  w nazwie zmiennej ma znaczenie, a bez `$` PHP w ogóle nie widzi zmiennej.
- **Na stronie widać `$name` zamiast imienia**: tekst stoi w apostrofach `'...'`.
  Zmienne podmienia tylko cudzysłów podwójny `"..."`.
- **`TypeError: Unsupported operand types: string + int`**: tekst został sklejony plusem.
  W PHP tekst łączy tylko kropka, plus służy do liczb.
- **Zamiast 18 wychodzi 171**: `$age . 1` dokleja cyfrę 1 do tekstu. Dodawanie weź w nawias:
  `($age + 1)`.
- **Słowa są sklejone, na przykład „mieścieGdynia”**: kropka nie dodaje spacji. Wpisz ją
  w cudzysłowie, na przykład `"w mieście "`.
- **`strlen()` daje za dużo przy polskich słowach**: liczy bajty, a polska litera ma dwa.
  Znaki liczy `mb_strlen()`, a wielkie litery robi `mb_strtoupper()`.
- **W przeglądarce widzisz kod PHP zamiast strony**: plik otwarto podwójnym kliknięciem i adres
  zaczyna się od `file://`. Wejdź przez `http://localhost/...`.
