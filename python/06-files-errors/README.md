# Python: pliki tekstowe i wyjątki

Do lekcji 15 i 16 kursu Python.

`main.py` to jeden program, który zapisuje listę zakupów do pliku, czyta ten plik linia po linii,
a potem pyta o liczbę w pętli, która nie wywala się po błędnej odpowiedzi. W folderze `tasks` są trzy
pliki do dokończenia i mały plik z ocenami, na którym pracują dwa pierwsze zadania.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python tasks/01_read_grades.py`,
   na Macu i Linuksie `python3 tasks/01_read_grades.py`. Każdy inny plik uruchamiasz tak samo,
   wystarczy zmienić nazwę na końcu.
5. Gdy program prosi o dane, wpisz je w terminalu i naciśnij Enter. `main.py` pyta o liczbę produktów,
   `tasks/02_add_grade.py` o ocenę, a `tasks/03_safe_division.py` o dwie liczby.
6. Pliki, które programy tworzą i zmieniają, lądują obok kodu: `shopping.txt` przy `main.py`,
   a `grades.txt` w folderze `tasks`. Możesz je otworzyć w edytorze i zobaczyć, co się zapisało.

## Co jest w plikach

- `main.py`: zapis listy do `shopping.txt`, odczyt pętlą linia po linii, pętla `while True`
  z `try` i `except ValueError` oraz złapany `FileNotFoundError`.
- `tasks/grades.txt`: sześć ocen, po jednej w linii. To dane do zadań 1 i 2.
- `tasks/01_read_grades.py`: liczba ocen w pliku i ich średnia.
- `tasks/02_add_grade.py`: dopisanie nowej oceny na koniec pliku.
- `tasks/03_safe_division.py`: kalkulator dzielenia odporny na tekst i na zero.

## Co zmienić

- `main.py`: na samym końcu, w miejscu `TU ZMIEŃ`, dopisz własny produkt do listy `products`
  albo zapisz do pliku jeszcze jedną linię.
- `tasks/01_read_grades.py`: w miejscu `TU ZMIEŃ`, wewnątrz pętli, zwiększ `count` o 1 i dodaj
  `grade` do `total`. Gotowy program wypisze `Ocen: 6` i `Średnia: 4.0`.
- `tasks/02_add_grade.py`: w miejscu `TU ZMIEŃ` otwórz plik w trybie dopisywania i zapisz ocenę
  w nowej linii. Pętli czytającej na dole nie ruszaj. Uruchom program dwa razy i sprawdź,
  czy w pliku są obie nowe oceny.
- `tasks/03_safe_division.py`: w miejscu `TU ZMIEŃ` włóż zamianę na liczby i dzielenie do bloku
  `try`, a pod nim dopisz `except ValueError` i `except ZeroDivisionError`. Zamiast gotowego
  `print()` wypisz wynik albo komunikat o błędzie.

## Częste błędy

- `FileNotFoundError: [Errno 2] No such file or directory: 'grades.txt'`: literówka w nazwie pliku
  albo program uruchomiony z innego katalogu. Dlatego w szablonie ścieżka powstaje z
  `Path(__file__).parent`, czyli z folderu, w którym leży sam program.
- `ValueError: I/O operation on closed file`: użyłeś `f` po wyjściu z bloku `with`. Wszystko, co robisz
  na pliku, musi być wcięte pod `with`.
- `ValueError: invalid literal for int() with base 10`: `int()` przyjmuje tylko liczbę całkowitą,
  więc zarówno słowo, jak i `16.5` kończą się tym błędem.
- W pliku jest jedna linia `chlebmlekomasło`: w `write()` zabrakło `"\n"`. `write()` zapisuje dokładnie
  to, co dostanie, i sam nie przechodzi do nowej linii.
- Po uruchomieniu w pliku został tylko ostatni wpis: tryb `"w"` czyści plik przy otwarciu,
  do dopisywania służy tryb `"a"`.
- Między liniami z pliku pojawiają się puste linie: wypisujesz `print(line)` zamiast
  `print(line, end="")`, a linia z pliku ma już swój znak nowej linii.
- `SyntaxError: expected ':'` albo `IndentationError` przy `try`: po `try` i po `except` zawsze jest
  dwukropek, a linie pod nimi są wcięte o cztery spacje. Po `except` piszesz samą nazwę typu błędu,
  na przykład `except ValueError:`, bez treści komunikatu.
