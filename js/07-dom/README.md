# JavaScript: DOM, czyli zmieniamy stronę

Do lekcji 20–25 kursu JavaScript (4Ti: lekcje 50–55).

`index.html` i `script.js` pokazują cały temat DOM po kolei: szukanie elementu po `id` i po klasie,
zmianę tekstu (`textContent`, `innerHTML`) i wyglądu (`style`), odczyt i podmianę atrybutu
(`getAttribute`, `setAttribute`), a na końcu tworzenie i usuwanie elementów (`createElement`,
`appendChild`, `remove()`). Przyciski wołają funkcje przez `onclick`, tak jak na lekcjach.
W folderze `tasks` jest pięć zadań, od najłatwiejszego do zadania dla chętnych. Każde zmienia stronę,
więc wynik widać od razu w przeglądarce.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code.
2. Otwórz `index.html` w przeglądarce (dwuklik na pliku albo przeciągnięcie go do okna przeglądarki).
3. Wciśnij F12 i przejdź na zakładkę „Console”. Tam widać, co wypisuje `console.log`,
   i tam pojawiają się błędy, gdy coś nie działa.
4. Zadanie otwierasz tak samo: dwuklik na `tasks/01-club-plan.html`. Kod piszesz w pliku `.js`
   o tej samej nazwie, zapisujesz go i odświeżasz stronę klawiszem F5.
5. Pliki `.svg` i `style.css` muszą zostać obok `index.html`. Strony z `tasks` sięgają po nie
   przez `../`, czyli jeden folder wyżej.

## Co jest w plikach

- `index.html`: nagłówek, trzy akapity z klasą `item`, akapit `info`, obrazek `photo` i lista `tasks`,
  a pod nimi przyciski.
- `script.js`: sześć ponumerowanych części, od obiektu `document` do `remove()`.
  Część kodu działa od razu po otwarciu strony, reszta to funkcje wywoływane przyciskami.
- `style.css`: wygląd wszystkich stron, także klasy `highlight`, `done`, `error` i pasek postępu,
  które włącza skrypt.
- `image-a.svg`, `image-b.svg`, `image-c.svg`: trzy lokalne obrazki, między którymi przełączają
  `index.html` i zadanie 3.
- `tasks/01-club-plan`: zmiana nagłówka i liczenie elementów z klasą zaraz po otwarciu strony.
- `tasks/02-room-status`: dwa przyciski zmieniają tekst i kolor akapitu oraz liczą kliknięcia.
- `tasks/03-gallery`: galeria trzech obrazków, która podmienia `src` i `alt`.
- `tasks/04-shopping-list`: lista zakupów z polem tekstowym, dodawaniem, usuwaniem i licznikiem.
- `tasks/05-task-board` (dla chętnych): cała lista zbudowana pętlą z tablicy obiektów,
  z paskiem postępu.

## Co zmienić

- `script.js`: na końcu, w miejscu `TU ZMIEŃ`, dopisz własny przycisk w `index.html` i funkcję,
  którą on wywoła.
- `tasks/01-club-plan.js`: znajdź nagłówek i elementy z klasą `lesson`, pomaluj podsumowanie.
  Ma wyjść nagłówek „Plan koła informatycznego” i zielone „Zajęć w planie: 4”.
- `tasks/02-room-status.js`: uzupełnij `setBusy()` i `setFree()`. Po kliknięciach „Zajęta”,
  „Wolna”, „Zajęta” ma być czerwone „Sala zajęta” i „Zmian statusu: 3”.
- `tasks/03-gallery.js`: uzupełnij `nextImage()`. Trzecie kliknięcie wraca do obrazka A
  i podpisu „Obrazek 1 z 3”.
- `tasks/04-shopping-list.js`: uzupełnij `addProduct()` i `removeLast()`. Po dodaniu „jabłka”
  i dwóch usunięciach zostaje „chleb” i „Na liście: 1”.
- `tasks/05-task-board.js`: uzupełnij `renderBoard()`. Po otwarciu ma być „Zrobione: 2 z 4”
  i pasek do połowy, po kliknięciu „Zrób wszystkie” „Zrobione: 4 z 4”.

Plików `.html` w zadaniach nie musisz ruszać, chyba że zadanie dla chętnych każe dopisać przycisk.

## Częste błędy

- `Uncaught TypeError: Cannot read properties of null (reading 'textContent')`: `getElementById`
  nie znalazł elementu i oddał `null`. Porównaj `id` w HTML i w JS znak po znaku. Pamiętaj, że
  `getElementById("#title")` z krzyżykiem też nie zadziała: krzyżyk to zapis z CSS.
- `Uncaught TypeError: document.getElementByID is not a function`: na końcu jest małe „d”,
  czyli `getElementById`.
- `Uncaught ReferenceError: setBusy is not defined` po kliknięciu: nazwa w `onclick` różni się
  od nazwy funkcji w pliku `.js`, najczęściej wielkością liter. Albo w pliku `.js` jest błąd składni
  i cały plik się nie wczytał: wtedy w konsoli wyżej stoi `SyntaxError` z numerem linii.
- Na stronie widać słowo `undefined` albo nic się nie zmienia po `lessons.textContent = ...`:
  `getElementsByClassName` oddaje kolekcję, a nie jeden element. Wybierz element numerem,
  na przykład `lessons[0]`, albo przejdź pętlą po wszystkich.
- Nowy element nie pojawia się na liście: po `createElement` brakuje `appendChild`. Element istnieje
  wtedy tylko w pamięci. Zapis czytamy „rodzic dołącza dziecko”: `list.appendChild(newItem)`.
- Po `setAttribute("class", "done")` element stracił inne klasy: `setAttribute` podmienia cały atrybut.
  Gdy chcesz dołożyć jedną klasę do już istniejących, użyj `classList.add("done")`.
- Obrazek pokazuje pustą ramkę po kliknięciu: w `src` jest ścieżka do pliku, którego nie ma.
  Sprawdź w zakładce „Elements”, co naprawdę stoi w `src`, i porównaj z nazwą pliku na dysku.
- Lista w zadaniu 5 podwaja się po kliknięciu: z `renderBoard()` zniknęła linia `board.innerHTML = ""`,
  która czyści listę przed rysowaniem jej od nowa.
