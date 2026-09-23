# JavaScript: obiekty

Do lekcji 14–15 kursu JavaScript (4Ti: lekcje 44–45).

`index.html` z plikiem `script.js` pokazuje obiekt od pierwszego literału w klamrach do listy
obiektów w pętli. Po drodze widać właściwości, czyli pary klucz i wartość, odczyt kropką i nawiasem
kwadratowym, zmianę i dopisanie właściwości, nawias z nazwą właściwości w zmiennej, metodę
`introduceSelf` ze słowem `this` oraz tablicę obiektów przechodzoną pętlą `for...of`. Wszystko
wypisuje się w konsoli przeglądarki. W folderze `tasks` jest pięć zadań, od najłatwiejszego
do najtrudniejszego. Ostatnie jest dla chętnych.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code.
2. Otwórz `index.html` w przeglądarce: kliknij plik dwa razy w Eksploratorze plików albo przeciągnij
   go na okno Chrome.
3. Wciśnij F12 (albo Ctrl+Shift+I), przejdź na zakładkę `Console` i odśwież stronę klawiszem F5.
4. Zadania otwierasz tak samo, na przykład `tasks/01-game-card.html`. Zmieniasz tylko plik `.js`
   o tej samej nazwie, a po każdej zmianie zapisujesz go (Ctrl+S) i odświeżasz stronę.

## Co jest w plikach

- `index.html` i `script.js`: obiekt `student` odczytany kropką i nawiasem, dopisana właściwość
  `city`, metoda `introduceSelf` w dwóch obiektach nauczycieli i lista książek zsumowana pętlą.
- `style.css`: wygląd wszystkich stron w folderze, bez zmian.
- `tasks/01-game-card`: pierwszy własny obiekt `game` z trzema właściwościami.
- `tasks/02-phone-update`: zmiana ceny, nowa właściwość `color` i nawias ze zmienną.
- `tasks/03-pet-method`: metoda `introduceSelf` z `this` w dwóch zwierzakach.
- `tasks/04-class-grades`: tablica uczniów, pętla `for...of`, średnia i licznik z warunkiem.
- `tasks/05-shop-order` (dla chętnych): zamówienie z listą produktów i dwiema metodami,
  które liczą towary i dostawę.

## Co zmienić

- `script.js`: na końcu pliku, w miejscu `TU ZMIEŃ`, zbuduj obiekt o sobie i dopisz mu metodę.
- `tasks/01-game-card.js`: wpisz do klamer `title`, `genre` i `releaseYear`, potem dopisz trzecią
  linię nawiasem. Ma wyjść „Tytuł: Kosmiczny rajd”, „Gatunek: wyścigi” i „Rok wydania: 2024”.
- `tasks/02-phone-update.js`: obniż cenę o 200, dopisz kolor i popraw ostatnią linię. Ma wyjść
  „Cena: 1000 zł”, „Kolor: grafitowy” i „Pole storage: 128”.
- `tasks/03-pet-method.js`: napisz treść obu metod. Ma wyjść „Jestem Burek, pies, mam 3 lata”,
  „Jestem Mruczek, kot, mam 2 lata” i po urodzinach „Jestem Burek, pies, mam 4 lata”.
- `tasks/04-class-grades.js`: uzupełnij wnętrze pętli. Ma wyjść pięć linii z ocenami,
  „Średnia klasy: 3” i „Zagrożonych: 1”.
- `tasks/05-shop-order.js`: napisz pętlę wypisującą pozycje i obie metody. Pierwsze podsumowanie to
  „Towary: 87 zł, dostawa: 15 zł”, drugie „Towary: 107 zł, dostawa: 0 zł”.

## Częste błędy

- `Uncaught SyntaxError: Unexpected token ';'` albo `Unexpected identifier`: między właściwościami
  stoi średnik albo brakuje przecinka. W klamrach właściwości oddziela przecinek, średnik stawiasz
  tylko raz, po zamykającej klamrze. Taki błąd zatrzymuje cały plik, więc konsola nie pokaże nic
  poza nim.
- W konsoli jest `undefined` zamiast wartości: obiekt nie ma właściwości o tej nazwie. Najczęściej
  to literówka albo inna wielkość liter, na przykład `firstname` zamiast `firstName`.
- `Uncaught ReferenceError: genre is not defined`: przy nawiasie zabrakło cudzysłowu.
  `game[genre]` szuka zmiennej `genre`, a `game["genre"]` właściwości. Wyjątek to zadanie 2: tam
  nazwa siedzi w zmiennej `field`, więc piszesz `phone[field]` bez cudzysłowu.
- `Uncaught ReferenceError: name is not defined` w metodzie: brakuje `this.` przed nazwą
  właściwości. Wewnątrz metody zawsze piszesz `this.name`, nie samo `name`.
- W konsoli zamiast zdania widać `ƒ () {...}`: metoda została wypisana bez nawiasów. Nawiasy `()`
  ją uruchamiają, bez nich widać tylko jej treść.
- `$this->name` albo `this->name` przeniesione z PHP: w JavaScript nie ma dolara ani strzałki,
  jest sama kropka, czyli `this.name`.
- Suma w zadaniu 5 rośnie przy każdym wywołaniu: zmienna na sumę stoi poza metodą. Zacznij ją od 0
  wewnątrz metody, nad pętlą.
