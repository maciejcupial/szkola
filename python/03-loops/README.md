# Python: pętle while i for

Do lekcji 07 i 08 kursu Python.

`main.py` pokazuje w jednym programie oba rodzaje pętli: `while`, która powtarza się nieznaną
z góry liczbę razy, `break`, który wychodzi z pętli wcześniej, oraz `for` z `range()`, gdy liczbę
powtórzeń znamy. Po drodze wraca zmienna zbierająca wynik, czyli `total`. W folderze `tasks` są
trzy pliki do dokończenia, od najłatwiejszego do najtrudniejszego.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python tasks/01_sum_to_n.py`,
   na Macu i Linuksie `python3 tasks/01_sum_to_n.py`. Tak samo uruchamiasz każdy inny plik,
   wystarczy zmienić nazwę na końcu.
5. Gdy program prosi o dane, wpisz liczbę i naciśnij Enter. W `main.py` najpierw podajesz kolejne
   partie jabłek (na przykład 65, 71, 73, 75, 70), a potem liczbę do tabliczki mnożenia (na przykład 7).

## Co jest w plikach

- `main.py`: zbiórka jabłek pętlą `while` z licznikiem `total` i wyjściem przez `break`,
  tabliczka mnożenia pętlą `for` i odliczanie z krokiem ujemnym.
- `tasks/01_sum_to_n.py`: suma liczb od 1 do n pętlą `for`.
- `tasks/02_sum_until_zero.py`: sumowanie wpisywanych liczb, aż ktoś wpisze 0, pętlą `while`.
- `tasks/03_factorial.py`: silnia, czyli 1 * 2 * 3 * ... * n.

## Co zmienić

- `main.py`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własną pętlę.
- `tasks/01_sum_to_n.py`: w miejscu `TU ZMIEŃ` napisz pętlę `for`, która dodaje kolejne liczby
  do zmiennej `total`. Ostatniego `print()` nie ruszaj. Dla n = 10 ma wyjść 55.
- `tasks/02_sum_until_zero.py`: w miejscu `TU ZMIEŃ` napisz pętlę `while`. Do bloku pętli należą
  dwie linie: dodanie liczby do `total` i pytanie o następną liczbę. Dla 5, 7, 3, 0 ma wyjść 15.
- `tasks/03_factorial.py`: w miejscu `TU ZMIEŃ` napisz pętlę, która mnoży `result` przez kolejne
  liczby. Zmiennej `result` nie zaczynaj od zera. Dla n = 5 ma wyjść 120.

## Częste błędy

- Program pyta bez końca i nie da się go zatrzymać: w bloku pętli nie ma linii, która zmienia
  wartość sprawdzaną w warunku (na przykład brakuje `total += count`). Przerwij program klawiszami
  Ctrl+C i dopisz tę linię.
- `IndentationError: expected an indented block after 'while' statement on line 2`: pierwsza linia
  wewnątrz pętli nie ma wcięcia. Wszystkie linie bloku wcinamy o cztery spacje, tak samo głęboko.
- `ValueError: invalid literal for int() with base 10: ''`: nacisnąłeś Enter bez wpisania liczby.
  `int()` przyjmuje tylko cyfry, uruchom program jeszcze raz i podaj liczbę.
- `EOFError: EOF when reading a line`: program prosi o dane, a nie ma ich skąd wziąć. Uruchom plik
  w terminalu albo w edytorze i wpisuj liczby ręcznie, nie przez przycisk „Run” w trybie bez konsoli.
- Wynik o jeden za mały: druga liczba w `range()` nie wchodzi do zakresu. `range(1, 10)` kończy się
  na 9, więc suma do n potrzebuje `range(1, n + 1)`.
- Zamiast sumy wychodzi ostatnia liczba: `total = 0` trafiło do środka pętli i zeruje wynik przy
  każdym obiegu. Ta linia stoi nad pętlą, bez wcięcia.
