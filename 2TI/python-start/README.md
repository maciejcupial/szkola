# Python: pierwszy program i trzy zadania

`main.py` pokazuje w jednym krótkim programie pięć podstaw Pythona: wczytywanie danych, wypisywanie,
warunek, pętlę i funkcję. W folderze `tasks` są trzy pliki do dokończenia, po jednym na każdy temat.

Komentarze w kodzie są po angielsku: tak wygląda kod w prawdziwych projektach, a każda linia jest opisana.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python tasks/01_condition.py`,
   na Macu i Linuksie `python3 tasks/01_condition.py`. Tak samo uruchamiasz każdy inny plik,
   wystarczy zmienić nazwę na końcu.
5. Gdy program prosi o dane, wpisz je w terminalu i naciśnij Enter.

## Co jest w plikach

- `main.py`: gotowy program z wejściem, warunkiem, pętlą i funkcją `double()`.
- `tasks/01_condition.py`: liczba parzysta czy nieparzysta.
- `tasks/02_loop.py`: suma liczb od 1 do n.
- `tasks/03_function.py`: funkcja `is_prime()` i gotowa pętla testowa.

## Co zmienić

- `main.py`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własny kod.
- `tasks/01_condition.py`: w miejscu `TU ZMIEŃ` napisz `if` i `else` dla zmiennej `number`,
  a zamiast gotowego `print()` wypisz swój komunikat.
- `tasks/02_loop.py`: w miejscu `TU ZMIEŃ` napisz pętlę, która dodaje kolejne liczby
  do zmiennej `total`. Ostatniego `print()` nie ruszaj.
- `tasks/03_function.py`: w funkcji `is_prime()` zamiast `return False` zwróć `True` dla liczb
  pierwszych. Pętli testowej na dole nie zmieniaj, ma wypisać 2 3 5 7 11 13 17 19.

## Częste błędy

- `ValueError: invalid literal for int() with base 10`: nacisnąłeś Enter bez wpisania liczby albo
  wpisałeś słowo. `int()` przyjmuje tylko cyfry, uruchom program jeszcze raz i podaj liczbę.
- `IndentationError`: linie wewnątrz `if`, pętli albo funkcji muszą być wcięte o cztery spacje,
  wszystkie tak samo. Nie mieszaj spacji z tabulatorem.
- Program nic nie wypisuje albo wypisuje nie to, co zmieniałeś: prawdopodobnie uruchomiłeś inny plik.
  Sprawdź nazwę pliku na górze okna edytora, a w terminalu nazwę po `python` lub `python3`.
