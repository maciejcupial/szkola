# PHP: instrukcje warunkowe

Do lekcji 04–05 kursu PHP (4Ti: lekcje 06–07).

`index.php` to bramka na siłowni, która sprawdza karnet jednej osoby. Każdą decyzję na stronie
podejmuje inna konstrukcja: `if … else`, drabinka `elseif`, warunki z `&&`, `||` i `!`, `switch`,
`match`, operator `? :` i operator `??`. W komentarzach części są ponumerowane od 1 do 7.
W folderze `tasks` jest pięć plików do dokończenia, od najłatwiejszego do najtrudniejszego.
Ostatnie zadanie jest dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do katalogu `htdocs` w XAMPP (Windows: `C:\xampp\htdocs\04-conditions`,
   Mac: `/Applications/XAMPP/htdocs/04-conditions`).
2. W XAMPP Control Panel wciśnij **Start** przy module **Apache**.
3. Wpisz w przeglądarce `http://localhost/04-conditions/index.php`. Zadanie otwierasz tak samo,
   na przykład `http://localhost/04-conditions/tasks/01-shipping-cost.php`.
4. Bez XAMPP: w terminalu, w folderze szablonu, wpisz `php -S localhost:8000` i otwórz
   `http://localhost:8000/index.php`.
5. Po każdej zmianie w pliku zapisz go i odśwież stronę w przeglądarce.
6. Dopisz do adresu `?name=Kuba`, a zobaczysz, jak `??` bierze imię z adresu zamiast z tablicy.

## Co jest w plikach

- `index.php`: karnet na siłownię, czyli wszystkie konstrukcje z obu lekcji w jednym pliku.
- `tasks/01-shipping-cost.php`: koszt dostawy zależny od kwoty zamówienia, drabinka `elseif`.
- `tasks/02-leap-year.php`: rok przestępny, czyli `%` z lekcji o operatorach razem z `&&` i `||`,
  a potem operator `? :`.
- `tasks/03-order-status.php`: status zamówienia słowami, `switch` z dwoma `case` pod sobą.
- `tasks/04-vat-rate.php`: stawka VAT przez `match`, cena brutto i opis ceny przez `? :`.
- `tasks/05-cinema-ticket.php` (dla chętnych): cena biletu do kina z danych w adresie,
  wszystkie konstrukcje naraz.

Na górze każdego zadania jest komentarz z dokładnym wynikiem, który ma pojawić się na stronie,
i z kilkoma innymi wartościami do sprawdzenia.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `index.php`: w miejscu `TU ZMIEŃ` zmień wiek, rodzaj karnetu i liczbę wejść. Sprawdź na przykład
  `"age" => 70`, `"pass" => "open"` i `"visitsLeft" => 0`.
- `tasks/01-shipping-cost.php`: napisz drabinkę, która ustawia `$shippingCost`. Dla 120 zł ma wyjść
  dostawa 9 zł, razem 129 zł.
- `tasks/02-leap-year.php`: zamiast `false` wpisz warunek z `%`, `&&` i `||`, a dwie linie pod nim
  zamień na `? :`. Dla 2024 ma wyjść „przestępny” i 29 dni, dla 1900 „zwykły” i 28 dni.
- `tasks/03-order-status.php`: napisz `switch`, który ustawia `$statusText`. Dla `"packed"` ma wyjść
  „W przygotowaniu”.
- `tasks/04-vat-rate.php`: zamiast `0` wstaw `match`, a stały opis ceny zamień na `? :`. Dla chleba
  ma wyjść VAT 5% i brutto 21 zł (promocja).
- `tasks/05-cinema-ticket.php`: odczytaj cztery wartości z `$_GET` przez `??`, ustaw cenę przez
  `match`, zniżkę drabinką i opis ceny przez `? :`. Bez niczego w adresie ma wyjść zniżka 30%
  i do zapłaty 18.2 zł. Przed zmianami strona pisze „Nie znam takiego dnia.” i tak ma być.

## Częste błędy

- Każda kwota daje ten sam wynik: drabinka zaczyna się od najniższego progu. PHP zatrzymuje się
  na pierwszym prawdziwym warunku, więc progi piszemy od największego w dół.
- Warunek jest zawsze prawdziwy: w nawiasie stoi jedno `=` zamiast `===`. Jedno `=` przypisuje
  wartość i PHP nie zgłasza żadnego błędu.
- Blok `if` wykonuje się zawsze: po nawiasie z warunkiem stoi średnik, na przykład
  `if ($orderTotal >= 200);`. Średnik kończy `if`, a klamry wykonują się już bez warunku.
- Strona pokazuje kilka statusów naraz: w `switch` brakuje `break`. Każdy `case` kończy się `break`,
  chyba że celowo sklejasz dwa przypadki, jak `"paid"` i `"packed"`.
- `Uncaught Error: Undefined constant "packed"`: tekst w `case` albo w kluczu tablicy nie ma
  cudzysłowów. Pisz `case "packed":` i `$_GET["day"]`.
- `Uncaught UnhandledMatchError: Unhandled match case 'xyz'`: `match` nie znalazł pasującej gałęzi,
  a nie ma `default`. Dopisz `default => …` na końcu.
- `Warning: Undefined array key "age"`: czytasz z `$_GET` bez `??`, a w adresie nie ma `?age=`.
  Zapis `$_GET["age"] ?? 16` podstawia wartość domyślną bez ostrzeżenia.
- ``Fatal error: Unparenthesized `a ? b : c ? d : e` is not supported``: dwa operatory `? :`
  jeden w drugim bez nawiasów. PHP 8 tego nie przyjmuje, przy kilku gałęziach użyj `if` albo `match`.
- `match` wybiera `default`, choć wartość wygląda dobrze: `match` porównuje ściśle, więc tekst `"5"`
  to nie liczba `5`. Dane z adresu są zawsze tekstem.
