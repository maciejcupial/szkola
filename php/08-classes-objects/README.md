# PHP: klasy i obiekty

Do lekcji 13–15 kursu PHP (4Ti: lekcje 15–17).

`index.php` buduje półkę z książkami z obiektów. Jedna klasa `Book` jest szablonem, a każda książka
to osobny obiekt zrobiony przez `new`. Po drodze widać właściwości, metodę `showInfo()` z `$this`,
konstruktor `__construct`, destruktor `__destruct`, trzy poziomy dostępu `public`, `private`
i `protected` oraz getter i setter, które pilnują prywatnej liczby stron. W folderze `tasks` jest
pięć plików do dokończenia, od najłatwiejszego do najtrudniejszego. Ostatni jest dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Uruchom XAMPP Control Panel i wciśnij **Start** przy module **Apache**.
2. Skopiuj cały folder do `htdocs`, tak żeby nazywał się `08-classes-objects`:
   - Windows: `C:\xampp\htdocs\08-classes-objects`
   - Mac: `/Applications/XAMPP/htdocs/08-classes-objects`
3. Wpisz w przeglądarce `http://localhost/08-classes-objects/`. Zadania otwierasz tak samo,
   na przykład `http://localhost/08-classes-objects/tasks/01-movies.php`.
4. Bez XAMPP: w terminalu, stojąc w folderze szablonu, wpisz `php -S localhost:8000`
   i otwórz `http://localhost:8000/`.
5. Po każdej zmianie w pliku wystarczy odświeżyć stronę.

## Co jest w plikach

- `index.php`: klasa `Book`, dwa obiekty z konstruktorem, getter `getPages()` i setter `setPages()`,
  tablica obiektów w pętli `foreach` i destruktor wywołany przez `unset()`.
- `tasks/01-movies.php`: klasa `Movie`, dwa obiekty i metoda `showInfo()` z `$this`.
- `tasks/02-parking.php`: konstruktor i destruktor, które same ogłaszają wjazd i wyjazd auta,
  oraz wartość domyślna rocznika.
- `tasks/03-bank-account.php`: prywatne saldo, getter `getBalance()` i metody `deposit()`
  oraz `withdraw()`, które odrzucają złą kwotę.
- `tasks/04-grade-book.php`: uczniowie jako obiekty z prywatną tablicą ocen, średnia i uczeń
  z najlepszą średnią.
- `tasks/05-warehouse.php` (dla chętnych): magazyn, który trzyma w prywatnej tablicy obiekty
  produktów, liczy ich wartość i szuka najtańszego.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

W każdym zadaniu szukaj komentarzy `TU ZMIEŃ`. Wynik, który ma się pojawić, jest opisany
w komentarzu na samej górze pliku. Plik działa od razu, tylko pokazuje niedokończony wynik.

- `index.php`: dopisz trzecią książkę przez `new Book(...)` i wywołaj dla niej `showInfo()`.
  Spróbuj ustawić jej `-10` stron przez `setPages()` i zobacz odmowę.
- `tasks/01-movies.php`: dokończ `showInfo()`, utwórz drugi film i wywołaj metodę dla obu.
  Po zmianie tytułu pierwszego filmu drugi ma zostać bez zmian.
- `tasks/02-parking.php`: napisz konstruktor i destruktor, dodaj rocznikowi wartość domyślną 2024
  i usuń oba auta przez `unset()`.
- `tasks/03-bank-account.php`: napisz `getBalance()`, `deposit()` i `withdraw()`. Na końcu saldo
  ma wynosić 120 zł. Odkomentuj ostatnią linię, żeby zobaczyć, że prywatnego salda nie da się
  zmienić z zewnątrz, i zakomentuj ją z powrotem.
- `tasks/04-grade-book.php`: napisz `addGrade()` i `getAverage()`, a pod spodem pętlę, która
  znajdzie ucznia z najlepszą średnią.
- `tasks/05-warehouse.php`: napisz `setPrice()`, `getValue()`, `isCheaperThan()`, `getTotalValue()`
  i `getCheapest()`. Magazyn ma być wart 2 749,98 zł.

## Częste błędy

- `Fatal error: Uncaught Error: Cannot access private property BankAccount::$balance`: odczytujesz
  albo zmieniasz prywatną właściwość spoza klasy. Użyj metody, na przykład `getBalance()`.
- Strona pokazuje pusty wynik albo zera, choć konstruktor jest napisany: w konstruktorze brakuje
  `$this->`. Zapis `$name = $name;` przypisuje parametr sam do siebie, a właściwość obiektu
  zostaje pusta. Poprawnie jest `$this->name = $name;`.
- Konstruktor w ogóle się nie uruchamia: w nazwie jest literówka. Muszą być dwa podkreślenia
  i dokładnie `__construct`, tak samo `__destruct`.
- `ArgumentCountError: Too few arguments to function Car::__construct()`: `new` podaje mniej
  wartości, niż konstruktor ma parametrów. Dodaj brakującą wartość albo daj parametrowi wartość
  domyślną, na przykład `$year = 2024`.
- `Error: Call to undefined function Movie()`: brakuje słowa `new` przed nazwą klasy.
- `DivisionByZeroError: Division by zero`: liczysz średnią z pustej tablicy. Najpierw sprawdź,
  czy `count()` nie zwraca 0.
- `Fatal error: Uncaught Error: Using $this when not in object context`: `$this`
  działa tylko wewnątrz metody klasy. Poza klasą piszesz nazwę obiektu, na przykład `$movie1->title`.
- Napis z destruktora pojawia się pod całą stroną: obiekt nie został usunięty przez `unset()`,
  więc PHP sprząta go dopiero na samym końcu skryptu.
