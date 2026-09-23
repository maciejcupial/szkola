# Python: funkcje, moduły i słowniki

Do lekcji 12, 13 i 14 kursu Python.

`main.py` to jeden gotowy program, który po kolei pokazuje własne funkcje z `return`, wartość domyślną
parametru, dwa sposoby importu, funkcje z modułów `math` i `random` oraz słownik z cenami. W folderze
`tasks` czekają trzy pliki do dokończenia, od najprostszego do najtrudniejszego.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python tasks/01_functions.py`,
   na Macu i Linuksie `python3 tasks/01_functions.py`. Każdy inny plik uruchamiasz tak samo,
   wystarczy zmienić nazwę na końcu.
5. Żaden program z tego szablonu nie pyta o dane, wszystkie liczby są już w kodzie.

## Co jest w plikach

- `main.py`: funkcje `area_of_square()`, `total_price()` i `greet()` z wartością domyślną, docstring,
  import `sqrt` z modułu `math`, rzut kostką z modułu `random` i słownik `prices` z cenami.
- `tasks/01_functions.py`: funkcje `celsius_to_kelvin()` i `is_even()`.
- `tasks/02_dice.py`: dziesięć rzutów dwiema kostkami i licznik dubletów.
- `tasks/03_cart.py`: słownik produkt i cena oraz funkcja `cart_total()` licząca koszyk.

## Co zmienić

- `main.py`: na samym końcu, w miejscu `TU ZMIEŃ`, dopisz własną funkcję i wywołaj ją w `print()`.
- `tasks/01_functions.py`: w obu funkcjach zamiast gotowego `return` zwróć właściwy wynik.
  Czterech `print()` na dole nie ruszaj, mają wypisać 293.15, 273.15, True i False.
- `tasks/02_dice.py`: w miejscu `TU ZMIEŃ` wylosuj drugą kostkę do zmiennej `second`
  i zwiększ `doubles` o 1, gdy obie kostki pokazują to samo. Ostatniego `print()` nie zmieniaj.
- `tasks/03_cart.py`: w funkcji `cart_total()` dodaj do zmiennej `total` cenę każdego produktu
  z listy `products`. Gdy działa, program wypisze 12.2 i 24.19.

## Częste błędy

- `NameError: name 'sqrt' is not defined`: brakuje wiersza importu albo pomieszałeś dwa zapisy.
  Po `import math` piszesz `math.sqrt(25)`, a po `from math import sqrt` samo `sqrt(25)`, nigdy na krzyż.
- Program nic nie wypisuje: masz samą definicję funkcji, bez wywołania. Sam przepis niczego nie ugotuje,
  potrzebny jest `print(area_of_square(5))`.
- Funkcja wypisuje wynik, ale `result = moja_funkcja(2)` daje `None`: w środku jest `print()` zamiast
  `return`. `print` kończy sprawę na ekranie, `return` oddaje wartość programowi.
- `NameError: name 'total' is not defined`: zmienna utworzona w funkcji nie istnieje poza nią.
  Jedyna droga wyniku na zewnątrz to `return`.
- `KeyError: 'Mleko'`: w słowniku klucze rozróżniają wielkość liter, a w `prices` jest `mleko`.
  Ten sam błąd zobaczysz przy każdej literówce w nazwie klucza.
- `TypeError: 'float' object is not callable` po zapisie `math.pi()`: `pi` to wartość, nie funkcja.
  Nawias stawiasz tylko tam, gdzie coś wywołujesz.
- `IndentationError: expected an indented block after function definition`: linie należące do funkcji
  muszą być wcięte o cztery spacje, wszystkie tak samo. Nie mieszaj spacji z tabulatorem.
