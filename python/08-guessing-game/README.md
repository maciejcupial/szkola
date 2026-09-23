# Python: gra w zgadywanie liczby

Do lekcji 27 kursu Python.

`main.py` to gotowa gra: komputer losuje liczbę od 1 do 100, a Ty jej szukasz i po każdej próbie
dostajesz podpowiedź „za mało” albo „za dużo”. Program liczy próby i nie wywraca się, gdy zamiast
liczby wpiszesz słowo. W folderze `tasks` są trzy kopie tej gry, każda z jednym miejscem
do rozbudowy: poziomy trudności, rekord zapisany w pliku i granie w kółko.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python tasks/01_levels.py`,
   na Macu i Linuksie `python3 tasks/01_levels.py`. Tak samo uruchamiasz każdy inny plik,
   wystarczy zmienić nazwę na końcu.
5. Gra czeka na Twoją liczbę. Wpisz ją w terminalu i naciśnij Enter. Dobra pierwsza próba to 50:
   po niej zostaje połowa zakresu.
6. Każdy plik ma na górze zmienną `GAME_SEED`. Bez niej gra losuje normalnie. Gdy chcesz, żeby
   za każdym razem wypadła ta sama liczba (przydaje się przy sprawdzaniu programu), uruchom grę tak:
   `GAME_SEED=7 python3 main.py` na Macu i Linuksie, a na Windowsie w PowerShellu
   `$env:GAME_SEED=7; python main.py`. Dla ziarna 7 wypada liczba 42.

## Co jest w plikach

- `main.py`: cała gra, czyli `random.randint(1, 100)`, pętla `while`, podpowiedzi, licznik prób
  `tries` i `try`/`except ValueError` na wpisany tekst.
- `tasks/01_levels.py`: ta sama gra ze zmiennymi `top_number` i `tries_limit` oraz komunikatem
  o przegranej, gdy próby się skończą.
- `tasks/02_best_score.py`: ta sama gra z gotowymi funkcjami `read_best_score()`
  i `save_best_score()`, które czytają i zapisują plik `best_score.txt` obok skryptu.
- `tasks/03_play_again.py`: ta sama gra zamknięta w funkcji `play_one_game()`, gotowa
  do uruchamiania wiele razy.

## Co zmienić

- `main.py`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własny komunikat na koniec gry.
- `tasks/01_levels.py`: w miejscu `TU ZMIEŃ` zapytaj o poziom i ustaw `top_number` oraz
  `tries_limit`. Reszty programu nie ruszaj, sam korzysta z tych dwóch zmiennych. Na poziomie
  łatwym gra ma losować od 1 do 20 i po piątej nietrafionej próbie wypisać `Koniec prób. Liczba to ...`.
- `tasks/02_best_score.py`: w miejscu `TU ZMIEŃ` porównaj `tries` z `best` i zapisz nowy rekord
  funkcją `save_best_score(tries)`. Pamiętaj o pierwszym uruchomieniu, gdy `best` to `None`.
  Po wygranej lepszej od rekordu program ma wypisać `Nowy rekord!`, a przy następnym starcie
  pokazać ten wynik w linii `Dotychczasowy rekord:`.
- `tasks/03_play_again.py`: w miejscu `TU ZMIEŃ` napisz pętlę, która pyta `Grasz jeszcze raz? (t/n): `
  i dopóki odpowiedzią jest „t”, wywołuje `play_one_game()` jeszcze raz. Funkcji nie zmieniaj,
  losuje nową liczbę przy każdym wywołaniu.

## Częste błędy

- `NameError: name 'guess' is not defined`: usunąłeś linię `guess = 0` sprzed pętli. Python sprawdza
  warunek `guess != number`, zanim gracz cokolwiek wpisze, więc zmienna musi już istnieć.
- `ValueError: invalid literal for int() with base 10: 'osiem'`: tak wygląda gra bez `try`/`except`.
  Jeśli widzisz ten komunikat, sprawdź, czy `int(text)` jest w bloku `try`.
- `IndentationError: unindent does not match any outer indentation level`: linie w bloku `try` mają
  dwa poziomy wcięcia (są w pętli i w `try`), a `except` wraca na poziom słowa `try`. Nie mieszaj
  spacji z tabulatorem.
- `EOFError: EOF when reading a line`: program prosi o liczbę, a wejście się skończyło. Dzieje się
  tak, gdy uruchamiasz grę z pliku podanego na wejście, nie z klawiatury.
- Gra zawsze pokazuje `Liczba prób: 1`: `tries = tries + 1` stoi poza pętlą albo bez wcięcia.
  Wcięcie decyduje o tym, co się powtarza.
- Gra nigdy się nie kończy: w warunku pętli jest `==` zamiast `!=`. Warunek czyta się „dopóki liczby
  są różne”.
- `FileNotFoundError` w zadaniu 2: plik z rekordem jeszcze nie istnieje. Dlatego `read_best_score()`
  najpierw sprawdza `SCORE_FILE.exists()`, a tego sprawdzenia nie usuwaj.
