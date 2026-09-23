# Python: klasy i obiekty

Do lekcji 28 i 29 kursu Python.

`main.py` to jeden gotowy program, który po kolei pokazuje własną klasę `Student` z konstruktorem
`__init__`, znaczenie `self`, metody `average()` i `add_grade()`, metodę `__str__` do `print()`,
dwa obiekty z osobnymi danymi, listę obiektów z pętlą, szukanie najlepszej średniej i na koniec
dziedziczenie, czyli klasę `Athlete` zbudowaną na klasie `Student`. W folderze `tasks` czekają cztery
pliki do dokończenia, coraz trudniejsze, ostatni dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python tasks/01_product.py`,
   na Macu i Linuksie `python3 tasks/01_product.py`. Każdy inny plik uruchamiasz tak samo,
   wystarczy zmienić nazwę na końcu.
5. Żaden program z tego szablonu nie pyta o dane, wszystkie liczby i imiona są już w kodzie.
   Każde zadanie uruchamia się od razu po pobraniu i wypisuje wynik zastępczy, więc po każdej
   poprawce możesz kliknąć Run i sprawdzić, czy jesteś bliżej.

## Co jest w plikach

- `main.py`: klasa `Student` (konstruktor `__init__`, `self`, `average()`, `add_grade()`, `__str__`),
  obiekty `ala` i `bartek`, lista `students` z pętlą, szukanie najlepszej średniej wzorcem `best`
  i klasa `Athlete(Student)` z `super().__init__`.
- `tasks/01_product.py`: klasa `Product` z ceną netto, do napisania `price_with_tax()` z podatkiem
  23 % i `describe()`.
- `tasks/02_cart.py`: klasa `Cart` z listą obiektów `Product`, do napisania `total()` i `__str__`.
- `tasks/03_bank_account.py`: klasa `BankAccount` z `deposit()` i `withdraw()`, do napisania warunek,
  który nie pozwala zejść poniżej zera.
- `tasks/04_inheritance.py` (dla chętnych): klasa `DiscountedProduct(Product)` z rabatem,
  do napisania `super().__init__` i cena po rabacie.

W nagłówku każdego zadania są wypisane linie, które ma wypisać gotowy program. To Twój sprawdzian:
zgadza się co do znaku, znaczy jest dobrze.

## Co zmienić

- `main.py`: na samym końcu, w miejscu `TU ZMIEŃ`, dopisz w klasie `Student` własną metodę,
  na przykład `highest_grade()` zwracającą `max(self.grades)`, i wywołaj ją w `print()`.
- `tasks/01_product.py`: w `price_with_tax()` zwróć cenę powiększoną o 23 %, a w `describe()`
  złóż opis produktu z tekstu i liczb. Bloku testowego na dole nie ruszaj.
- `tasks/02_cart.py`: w `total()` dodaj do zmiennej `total` cenę każdego produktu z listy
  `self.products`, a niżej dopisz całą metodę `__str__(self)`. Gotowy program wypisze
  `Do zapłaty: 16.69 zł` i `Koszyk, produktów: 3, razem 16.69 zł`.
- `tasks/03_bank_account.py`: w `withdraw()`, w miejscu `TU ZMIEŃ`, porównaj `amount` z `self.balance`,
  wypisz komunikat `Za mało środków, saldo:` i zakończ metodę samym `return`. Reszty metody
  nie zmieniaj. Gotowy program nigdy nie pokaże ujemnego salda.
- `tasks/04_inheritance.py`: w konstruktorze `DiscountedProduct` zamień dwie linie z `self.name`
  i `self.price` na jedno wywołanie `super().__init__(name, price)`, zapamiętaj rabat
  w `self.discount_percent`, a w `final_price()` policz cenę brutto po rabacie.

## Częste błędy

- `TypeError: Student.average() takes 0 positional arguments but 1 was given`: w definicji metody
  brakuje `self`. Python przy wywołaniu `ala.average()` sam podaje obiekt jako pierwszy argument,
  więc `self` musi stać w nawiasie każdej metody, nawet gdy metoda niczego więcej nie potrzebuje.
- `TypeError: Student.__init__() missing 1 required positional argument: 'grades'`: tworząc obiekt,
  podałeś mniej danych, niż wymaga konstruktor. `__init__(self, name, grades)` czeka na dwie wartości,
  więc piszesz `Student("Ala", [5, 4, 3])`. Samego `self` nigdy się nie podaje.
- `AttributeError: 'Student' object has no attribute 'nam'. Did you mean: 'name'?`: literówka w nazwie
  atrybutu albo atrybut, którego konstruktor nie utworzył. Python podpowiada w tym komunikacie, o którą
  nazwę prawdopodobnie chodziło. Wielkość liter też ma znaczenie: `self.Name` to nie jest `self.name`.
- `<__main__.Cart object at 0x104f2c9d0>` zamiast normalnego tekstu: to nie jest błąd, tylko obiekt
  wypisany bez metody `__str__`. Dopisz w klasie `def __str__(self):` i zwróć z niej tekst,
  a `print(cart)` zacznie pokazywać to, co zwraca ta metoda.
- `TypeError: __str__ returned non-string (type float)`: `__str__` zwraca liczbę zamiast tekstu.
  Każdą liczbę w tej metodzie opakuj w `str()`, na przykład `str(self.average())`.
- `AttributeError: 'DiscountedProduct' object has no attribute 'price'`: w konstruktorze klasy potomnej
  brakuje wywołania `super().__init__(...)`, więc atrybuty z klasy bazowej nigdy nie powstały.
- Zmianę w jednym obiekcie widać w drugim: to znak, że lista powstała raz, obok klasy, i wszystkie
  obiekty dostały tę samą. Każdy obiekt ma własne dane tylko wtedy, gdy powstają one w `__init__`.
