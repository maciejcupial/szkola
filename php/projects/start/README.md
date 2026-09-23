# Pierwszy skrypt PHP w XAMPP

Najmniejsza możliwa strona w PHP: jeden plik, kilka zmiennych i pętla wypisująca kwadraty liczb.
PHP liczy wszystko na serwerze, a do przeglądarki wysyła sam gotowy HTML.

## Jak uruchomić

1. Uruchom XAMPP Control Panel i wciśnij **Start** przy module **Apache**.
2. Skopiuj cały ten folder do katalogu `htdocs`, tak żeby nazywał się `start`:
   - Windows: `C:\xampp\htdocs\start`
   - Mac: `/Applications/XAMPP/htdocs/start`
3. Wpisz w przeglądarce adres `http://localhost/start/`.
4. Po każdej zmianie w pliku wystarczy odświeżyć stronę, niczego nie kompilujesz.

## Co jest w plikach

- `index.php`: cała strona, czyli kod PHP na górze i szablon HTML pod nim.
- `README.md`: ta instrukcja.

## Co zmienić

- `$name`: Twoje imię, wypisywane w nagłówku `<h1>`.
- `$numbers`: lista liczb w nawiasach kwadratowych. `array_sum` policzy z niej `$sum`,
  a pętla `foreach` wypisze kwadrat każdej liczby.
- `<title>`: tekst na karcie przeglądarki.
- `$year` zostaw w spokoju: `date("Y")` sam pobiera aktualny rok z serwera.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Częste błędy

- **W przeglądarce widzisz kod PHP zamiast strony.** Plik został otwarty podwójnym kliknięciem,
  więc adres zaczyna się od `file://`. PHP działa tylko przez serwer,
  wejdź na `http://localhost/start/`.
- **Apache nie startuje w XAMPP.** Port 80 zajmuje inny program, najczęściej Skype albo IIS.
  Zamknij go i wciśnij **Start** ponownie w XAMPP Control Panel, tam też zobaczysz komunikat o porcie.
- **`Parse error: syntax error, unexpected ...`.** Zwykle brakuje średnika na końcu linii
  albo cudzysłów został otwarty i nie został zamknięty.
  Numer linii z komunikatu wskazuje to miejsce albo linię tuż nad nim.
- **Strona jest pusta.** Sprawdź, czy plik nazywa się dokładnie `index.php` i leży w `htdocs/start`.
