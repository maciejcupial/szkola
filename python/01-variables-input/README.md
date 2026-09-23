# Python: zmienne, dane z klawiatury i obliczenia

Do lekcji 01, 02, 03 i 04 kursu Python.

`main.py` to jeden krótki program, który po kolei pokazuje wszystko z tych czterech lekcji:
wypisywanie tekstu, `sep` i `end`, zmienne i ich nazwy, cztery typy danych, wczytywanie danych
przez `input()`, zamianę tekstu na liczbę przez `int()` i `float()` oraz działania `+`, `*`, `/`,
`//`, `%`, `**` razem z `round()`. W folderze `tasks` są trzy pliki do dokończenia, coraz trudniejsze.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python main.py`, na Macu i Linuksie
   `python3 main.py`. Zadania uruchamiasz tak samo, tylko z inną nazwą, na przykład
   `python tasks/01_business_card.py`.
5. Gdy program prosi o dane, wpisz je w terminalu i naciśnij Enter. `main.py` pyta o trzy rzeczy:
   imię, liczbę jabłek Ani i liczbę jabłek Wojtka.

## Co jest w plikach

- `main.py`: gotowy program z powitaniem i liczeniem jabłek, od `print()` aż po `round()`.
- `tasks/01_business_card.py`: wizytówka z imienia, miasta i wieku za 10 lat.
- `tasks/02_seconds.py`: zamiana sekund na minuty i sekundy operatorami `//` oraz `%`.
- `tasks/03_shopping_bill.py`: rachunek w sklepie, czyli suma do zapłaty i reszta z banknotu.

## Co zmienić

- `main.py`: na samym końcu, w miejscu `TU ZMIEŃ`, dopisz własne obliczenie na zmiennej `total_apples`.
- `tasks/01_business_card.py`: w miejscu `TU ZMIEŃ` wypisz dwie linie wizytówki i skasuj gotowy
  `print()` z komunikatem o uzupełnieniu. Dla danych Ala, Gdańsk, 17 ma wyjść `Ala, Gdańsk`
  i `Za 10 lat będę mieć 27 lat.`.
- `tasks/02_seconds.py`: w miejscu `TU ZMIEŃ` policz `minutes` i `seconds`. Ostatniego `print()`
  nie ruszaj, dla 125 ma wypisać `125 s to 2 min i 5 s`.
- `tasks/03_shopping_bill.py`: w miejscu `TU ZMIEŃ` policz `total` i `change`, każdy przez
  `round(..., 2)`. Dla ceny 4.50, 3 sztuk i banknotu 50 ma wyjść `Do zapłaty: 13.5 zł`
  i `Reszta: 36.5 zł`.

## Częste błędy

- `ValueError: invalid literal for int() with base 10: 'cztery'`: w miejsce liczby wpisałeś słowo
  albo nacisnąłeś Enter bez wpisywania czegokolwiek. `int()` przyjmuje tylko cyfry.
- `ValueError: could not convert string to float: '4,99'`: cenę wpisujesz z kropką, nie z przecinkiem.
  Po polsku piszemy 4,99, ale Python czyta tylko `4.99`.
- `SyntaxError: '(' was never closed`: w zapisie `int(input("Ile masz lat? "))` nawiasy są dwa
  i oba muszą się domknąć na końcu linii. Policz je od prawej strony.
- `TypeError: can only concatenate str (not "int") to str`: próbujesz dodać tekst do liczby,
  na przykład `name + age`. Wypisz je przecinkiem: `print(name, age)`.
- `NameError: name 'total_aples' is not defined`: literówka w nazwie zmiennej albo inna wielkość
  liter. Dla Pythona `Total` i `total` to dwie różne zmienne.
- `IndentationError: unexpected indent`: linia zaczyna się od spacji, choć nie jest w żadnym bloku.
  W tym szablonie wszystkie linie zaczynają się od lewej krawędzi.
- Program wypisuje `45` zamiast `9`: zgubiłeś `int()` wokół `input()`, więc Python skleił dwa teksty
  zamiast dodać dwie liczby. Błędu nie będzie, wynik i tak jest zły.
