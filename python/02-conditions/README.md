# Python: warunki, czyli program, który decyduje

Do lekcji 05 i 06 kursu Python.

`main.py` to jeden program, który pokazuje wszystko z tych dwóch lekcji: porównania (`==`, `!=`, `<`,
`<=`, `>`, `>=`), instrukcję `if` z `else`, kaskadę `elif` z progami, warunek w warunku oraz słowa
`and`, `or` i `not`. Najpierw zamienia punkty z testu na ocenę, potem ustala cenę biletu do muzeum
według wieku. W folderze `tasks` są trzy pliki do dokończenia, coraz trudniejsze.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python main.py`, na Macu i Linuksie
   `python3 main.py`. Zadania uruchamiasz tak samo, tylko z inną nazwą, na przykład
   `python tasks/01_number_sign.py`.
5. Gdy program prosi o dane, wpisz je w terminalu i naciśnij Enter. `main.py` pyta o trzy rzeczy:
   liczbę punktów, wiek i legitymację. Na ostatnie pytanie odpowiada się `tak` albo `nie`.
6. Każdy program z warunkami sprawdź na kilku danych, po jednych dla każdej drogi. Dla `main.py`
   są to na przykład 95, 80, 60 i 20 punktów oraz wiek 5, 17, 40 i 72.

## Co jest w plikach

- `main.py`: gotowy program z oceną z punktów i ceną biletu, od porównań po `and`, `or` i `not`.
- `tasks/01_number_sign.py`: liczba dodatnia, ujemna czy zero.
- `tasks/02_leap_year.py`: sprawdzanie, czy rok jest przestępny.
- `tasks/03_bmi.py`: kalkulator BMI z czterema kategoriami.

## Co zmienić

- `main.py`: na samym końcu, w miejscu `TU ZMIEŃ`, dopisz własny warunek.
- `tasks/01_number_sign.py`: w miejscu `TU ZMIEŃ` napisz `if`, `elif` i `else` dla zmiennej `number`
  i skasuj gotowy `print()` z komunikatem o uzupełnieniu. Dla -4 ma wyjść `Liczba ujemna`,
  dla 0 `Zero`, a dla 7 `Liczba dodatnia`.
- `tasks/02_leap_year.py`: w miejscu `TU ZMIEŃ` przypisz do `is_leap` warunek zamiast `False`.
  Warunku `if is_leap:` na dole nie ruszaj. Dla 2024 i 2000 ma wyjść `jest przestępny`,
  dla 1900 i 2023 `nie jest przestępny`.
- `tasks/03_bmi.py`: w miejscu `TU ZMIEŃ` wpisz do zmiennej `category` nazwę kategorii.
  Dla wagi 60 i wzrostu 1.70 ma wyjść `Twoje BMI to 20.76` i `Kategoria: waga prawidłowa`.

## Częste błędy

- `SyntaxError: invalid syntax. Maybe you meant '==' or ':=' instead of '='?`: w warunku jest jeden
  znak `=`, który zapisuje wartość. Do porównywania służą dwa: `if points == 100:`.
- `SyntaxError: expected ':'`: po warunku brakuje dwukropka albo napisałeś `else if` zamiast `elif`.
- `SyntaxError: invalid syntax. Did you mean 'elif'?`: napisałeś `elseif` łącznie. W Pythonie to `elif`.
- `IndentationError: expected an indented block after 'if' statement on line 7`: po dwukropku linia
  musi być wcięta o cztery spacje. Nie mieszaj spacji z tabulatorem.
- `NameError: name 'category' is not defined`: zmienna dostaje wartość tylko w jednej gałęzi warunku,
  a program czyta ją także wtedy, gdy ta gałąź się nie wykonała. Nadaj jej wartość przed warunkiem.
- Wszyscy dostają tę samą ocenę: progi są w złej kolejności. Pierwszy prawdziwy warunek wygrywa,
  więc `if points >= 50` na górze łapie także 95 punktów. Zacznij od najwyższego progu.
- Liczba na granicy trafia nie tam, gdzie powinna: sprawdź `<` kontra `<=`. Zaprzeczeniem warunku
  `x < 4` jest `x >= 4`, a nie `x > 4`, bo inaczej gubi się samą czwórkę.
- Warunek `day == 6 and day == 7` nigdy nie jest prawdziwy: jedna zmienna nie ma dwóch wartości naraz.
  W takim pytaniu („sobota lub niedziela”) używa się `or`.
