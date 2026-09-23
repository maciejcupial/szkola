# PHP: własne funkcje

Do lekcji 08–10 kursu PHP (4Ti: lekcje 10–12).

`index.php` to strona kawiarni zbudowana z własnych funkcji: funkcja z parametrem i `return`,
parametr z wartością domyślną, pętla z akumulatorem schowana w funkcji, ta sama nazwa zmiennej
w środku i na zewnątrz funkcji oraz funkcja, która wywołuje inną funkcję. W folderze `tasks` jest
pięć stron do dokończenia, od najłatwiejszej do zadania dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Najprościej z terminala: stań w folderze szablonu, wpisz `php -S localhost:8000` i otwórz
   w przeglądarce `http://localhost:8000/index.php`. Zadania są pod adresami w rodzaju
   `http://localhost:8000/tasks/01-rectangle-area.php`.
3. Z XAMPP: uruchom Apache w XAMPP Control Panel, skopiuj folder do `htdocs` (na Windowsie
   `C:\xampp\htdocs`) i otwórz `http://localhost/<nazwa folderu>/index.php`.
4. Po każdej zmianie w pliku zapisz go i odśwież stronę w przeglądarce.

## Co jest w plikach

- `index.php`: przykład. Sekcje 1–5 na stronie odpowiadają kolejnym pomysłom z lekcji.
- `tasks/01-rectangle-area.php`: funkcja `rectangleArea($width, $height)` z dwoma parametrami.
- `tasks/02-ticket-price.php`: cena biletu ze zniżką, parametr z wartością domyślną.
- `tasks/03-average-grade.php`: średnia ocen, tablica jako argument i pętla `foreach` w funkcji.
- `tasks/04-visit-counter.php`: licznik odwiedzin, czyli zmienna lokalna kontra zmienna globalna.
- `tasks/05-shop-receipt.php`: dla chętnych, paragon ze sklepu z trzech funkcji, które
  współpracują ze sobą.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

Każde zadanie działa od razu po pobraniu, tylko pokazuje zera. Zmieniasz tylko miejsca
oznaczone `TU ZMIEŃ`, a wynik, który ma się pojawić, jest opisany na górze każdego pliku.

- `01-rectangle-area.php`: w funkcji zamiast `return 0;` zwróć iloczyn szerokości i wysokości.
  Mają wyjść pola 12, 25 i 20.
- `02-ticket-price.php`: dopisz drugi parametr `$discountPercent = 0` i policz cenę po zniżce.
  Mają wyjść 30,00 zł, 15,00 zł i 19,60 zł.
- `03-average-grade.php`: zsumuj oceny pętlą `foreach` w zmiennej `$sum`, podziel przez
  `count($grades)` i zaokrąglij przez `round(..., 2)`. Dla Ali ma wyjść 4.5, dla Celiny 5.33.
- `04-visit-counter.php`: w funkcji zwiększ `$visits` o 1 i zwróć wynik, a pod funkcją zapisz
  ten wynik z powrotem do `$visits`. Mają wyjść kolejno 10, 11, 10 i 11.
- `05-shop-receipt.php`: napisz `lineTotal`, `cartTotal` i `shippingCost`. Do zapłaty ma
  wyjść 100,96 zł, a z kodem na dostawę 85,97 zł.
- `index.php`: zmień ceny w `$order` albo dopisz własną funkcję i wywołaj ją w nowej sekcji.

## Częste błędy

- Wynik widać na stronie, a mimo to w dalszej części wychodzi pusto albo 0: w funkcji jest
  `echo` zamiast `return`. Funkcja bez `return` zwraca `null`, więc wynik trzeba oddać
  przez `return`, a `echo` zostawić przy wywołaniu.
- `Fatal error: Uncaught ArgumentCountError: Too few arguments to function ticketPrice()`:
  wywołanie ma mniej argumentów niż funkcja wymaganych parametrów. Brakujący parametr dostaje
  wartość domyślną tylko wtedy, gdy ma w definicji znak `=` i wartość, na przykład `= 0`.
- Parametr z wartością domyślną stoi na początku listy: wtedy nie da się go pominąć.
  Parametry z `=` piszemy zawsze na końcu, jak w `shippingCost($total, $freeFrom = 100)`.
- `Warning: Undefined variable $sum`: używasz poza funkcją zmiennej, która żyła tylko w jej
  środku. Zapisz to, co zwraca funkcja, do własnej zmiennej: `$total = cartTotal($cart);`.
- `Warning: Undefined variable` w środku funkcji: funkcja nie widzi zmiennych spoza siebie.
  Potrzebną wartość przekaż jako argument wywołania.
- `Fatal error: Cannot redeclare ...`: ta sama funkcja jest zdefiniowana dwa razy w jednym
  pliku. Zostaw jedną definicję i wywołuj ją, ile razy chcesz.
- Średnia wychodzi za mała: `$sum = 0` trafiło do środka pętli i zeruje sumę przy każdej ocenie
  albo `return` stoi w pętli i kończy funkcję już przy pierwszej ocenie.
