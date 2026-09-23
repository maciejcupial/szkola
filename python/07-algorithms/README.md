# Python: algorytmy, czyli systemy liczbowe, liczby pierwsze, wyszukiwanie i sortowanie

Do lekcji 18, 19, 20, 21, 22, 23, 24, 25 i 26 kursu Python.

`main.py` to jeden program, który pokazuje cztery algorytmy z tej części kursu: zamianę liczby
dziesiętnej na dwójkową, funkcję zwracającą resztę z dzielenia, sprawdzanie, czy liczba jest pierwsza,
i sortowanie przez wstawianie. W folderze `tasks` są cztery zadania do dokończenia, coraz trudniejsze:
największa liczba, wyszukiwanie liniowe, sortowanie bąbelkowe i wyszukiwanie binarne.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python tasks/01_biggest_number.py`,
   na Macu i Linuksie `python3 tasks/01_biggest_number.py`. Tak samo uruchamiasz każdy inny plik,
   wystarczy zmienić nazwę na końcu.
5. `main.py` prosi o jedną liczbę całkowitą dodatnią, na przykład 123. Wpisz ją w terminalu
   i naciśnij Enter. Pliki z folderu `tasks` o nic nie pytają, mają dane wpisane na stałe.

## Co jest w plikach

- `main.py`: zamiana liczby na zapis dwójkowy pętlą `while` i listą `digits`, funkcja
  `division_remainder()`, funkcja `is_prime()` z pętlą do pierwiastka i funkcja `insertion_sort()`.
- `tasks/01_biggest_number.py`: najdłuższy skok z serii zakończonej zerem (wartownikiem).
- `tasks/02_linear_search.py`: funkcja `linear_search()`, która zwraca indeks szukanej liczby
  albo -1, gdy liczby nie ma na liście.
- `tasks/03_bubble_sort.py`: sortowanie bąbelkowe, dwie pętle są gotowe, brakuje zamiany sąsiadów.
- `tasks/04_binary_search.py`: wyszukiwanie binarne w posortowanej liście, czyli metoda połowienia.

Każde zadanie ma na dole gotowy blok testowy ze stałymi danymi. Uruchom plik w dowolnym momencie,
a od razu zobaczysz, czy Twój kod już działa.

## Co zmienić

- `main.py`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własny kod.
- `tasks/01_biggest_number.py`: w miejscu `TU ZMIEŃ` porównaj `value` z `biggest`. Gotowy program
  ma wypisać `Najdłuższy skok: 6.41 m`. Linii z `position` nie ruszaj, to one biorą kolejną liczbę.
- `tasks/02_linear_search.py`: w miejscu `TU ZMIEŃ` napisz pętlę po indeksach listy i zwróć ten indeks,
  pod którym leży szukana liczba. `return -1` na końcu funkcji zostaw, to odpowiedź „nie ma takiej”.
  Gotowy program ma wypisać `Indeks liczby 26: 5` i `Indeks liczby 99: -1`.
- `tasks/03_bubble_sort.py`: w miejscu `TU ZMIEŃ` zamień miejscami `numbers[j]` i `numbers[j + 1]`,
  a linię `pass` usuń. Pętli i warunku nie zmieniaj. Gotowy program ma wypisać listę
  `[1, 2, 3, 4, 5, 6, 7, 8, 9]`.
- `tasks/04_binary_search.py`: w miejscu `TU ZMIEŃ` napisz pętlę `while`, która za każdym obrotem
  liczy środek zakresu i przesuwa `left` albo `right`. Gotowy program ma wypisać `Indeks liczby 61: 11`,
  `Indeks liczby 62: -1` i `Indeks liczby 4: 0`.

## Częste błędy

- `ValueError: invalid literal for int() with base 10: ''`: w `main.py` nacisnąłeś Enter bez wpisania
  liczby albo wpisałeś słowo. `int()` przyjmuje tylko cyfry, uruchom program jeszcze raz.
- `IndexError: list index out of range`: sięgasz po element, którego nie ma. W pętli po liście
  ostatni indeks to `len(numbers) - 1`, a przy sortowaniu bąbelkowym `numbers[j + 1]` wychodzi poza
  listę, gdy zmienisz zakres pętli.
- `TypeError: 'float' object cannot be interpreted as an integer`: do `range()` trafiła liczba
  z przecinkiem. `range()` przyjmuje tylko liczby całkowite, dlatego w `main.py` pierwiastek jest
  opakowany w `int()`.
- `IndentationError: expected an indented block after 'if' statement`: po `if`, `while` albo `def`
  musi być linia wcięta o cztery spacje. Sam komentarz nie wystarczy, komentarz to dla Pythona pusta
  linia. Dlatego w zadaniu 3 stoi `pass`.
- Program się nie kończy i trzeba go przerwać skrótem Ctrl+C: pętla `while` nie zmienia tego, co
  sprawdza jej warunek. W zadaniu 4 pamiętaj o `left = middle + 1` i `right = middle - 1`.
- Wyszukiwanie binarne zwraca -1 dla liczby, która jest na liście: to znak, że lista nie jest
  posortowana rosnąco. Metoda połowienia działa tylko na uporządkowanych danych.
