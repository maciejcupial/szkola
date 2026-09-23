# Python: listy i napisy

Do lekcji 09, 10 i 11 kursu Python.

`main.py` przechodzi przez listę ocen: tworzenie listy, `len`, indeksy, `append`, operator `in`,
pętla po liście, suma, średnia i szukanie największej wartości. Druga połowa programu robi to samo
z napisem wpisanym przez użytkownika: długość, litera po numerze, wycinek, `upper()` i f-string.
W folderze `tasks` są trzy pliki do dokończenia, od najłatwiejszego do najtrudniejszego.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code albo w Thonny.
2. W Visual Studio Code otwórz `main.py` i kliknij ▶ (Run) w prawym górnym rogu. Wynik pojawi się
   w terminalu na dole okna.
3. W Thonny otwórz plik i naciśnij F5 (albo zielony przycisk Run). Wynik pojawi się w panelu „Shell”.
4. Z terminala, stojąc w folderze szablonu: na Windowsie wpisz `python tasks/01_min_max_temperature.py`,
   na Macu i Linuksie `python3 tasks/01_min_max_temperature.py`. Tak samo uruchamiasz każdy inny plik,
   wystarczy zmienić nazwę na końcu.
5. Gdy program prosi o dane, wpisz je i naciśnij Enter. `main.py` pyta o imię (na przykład Bartek),
   zadania 2 i 3 proszą o słowo (na przykład Programowanie albo kajak). Nie naciskaj samego Enter,
   bo pusty napis nie ma żadnej litery.

## Co jest w plikach

- `main.py`: lista `grades` od pierwszego `print()` po średnią i największą ocenę, a potem napis
  `name` mierzony i cięty tymi samymi nawiasami kwadratowymi.
- `tasks/01_min_max_temperature.py`: najniższa i najwyższa temperatura z gotowej listy.
- `tasks/02_count_vowels.py`: liczenie samogłosek w słowie.
- `tasks/03_palindrome.py`: odwracanie słowa i sprawdzenie, czy to palindrom.

## Co zmienić

- `main.py`: na końcu pliku, w miejscu `TU ZMIEŃ`, dopisz własny fragment.
- `tasks/01_min_max_temperature.py`: w miejscu `TU ZMIEŃ` napisz jedną pętlę po liście, a w niej dwa
  warunki poprawiające `lowest` i `highest`. Dla gotowej listy ma wyjść -8 i 12.
- `tasks/02_count_vowels.py`: w miejscu `TU ZMIEŃ` napisz pętlę po literach słowa, która zwiększa
  `count` przy każdej samogłosce. Dla słowa „Programowanie” ma wyjść 6.
- `tasks/03_palindrome.py`: w miejscu `TU ZMIEŃ` napisz pętlę, która buduje `reversed_word`.
  Warunku pod spodem nie ruszaj. Dla słowa „kajak” ma wypisać „kajak” i „To jest palindrom.”.

## Częste błędy

- `IndexError: list index out of range`: sięgasz po numer, którego na liście nie ma. Przy pięciu
  wartościach ostatni numer to 4, bo liczymy od zera.
- `IndexError: string index out of range`: to samo w napisie, najczęściej po naciśnięciu samego
  Enter. Pusty napis nie ma nawet litery numer 0.
- Na ekranie pojawia się `None`: to wynik zapisu `print(grades.append(6))` albo
  `grades = grades.sort()`. Te metody zmieniają listę i nic nie oddają, więc pisze się je
  w osobnej linii, a listę wypisuje się potem.
- `TypeError: 'str' object does not support item assignment`: napisu nie da się zmienić w miejscu,
  zapis `word[0] = "J"` nie zadziała. Nowy napis składa się z kawałków: `"J" + word[1:]`.
- Wycinek krótszy, niż się spodziewasz: prawy numer nie wchodzi do wycinka, więc `word[2:5]` daje
  trzy znaki, czyli 5 - 2.
- Zamiast sumy wychodzi ostatnia wartość: `total = 0` trafiło do środka pętli. Ta linia stoi nad
  pętlą, bez wcięcia.
- `name.upper()` niby nie działa: metoda oddaje nowy napis, a stary zostaje bez zmian. Żeby zachować
  wynik, przypisz go: `name = name.upper()`.
