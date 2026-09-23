# JavaScript: zdarzenia

Do lekcji 26–27 kursu JavaScript (4Ti: lekcje 66–67).

Zdarzenie to sygnał od przeglądarki, że coś się właśnie stało: ktoś kliknął, nacisnął klawisz
albo wysłał formularz. `index.html` z `script.js` pokazuje wszystkie przykłady z lekcji na jednej
stronie: `addEventListener` ze zdarzeniem `click`, obiekt zdarzenia i `event.target`, formularz
ze zdarzeniem `submit` i `event.preventDefault()`, licznik naciśnięć przy `keydown` oraz zdarzenie
`load`.
W folderze `tasks` jest pięć zadań, od najłatwiejszego do najtrudniejszego. Ostatnie jest dla chętnych
i przygotowuje do gry w kółko i krzyżyk.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie i otwórz go w Visual Studio Code.
2. Otwórz `index.html` w przeglądarce: kliknij plik dwa razy albo przeciągnij go do okna Chrome.
   Możesz też wrzucić folder do `htdocs` w XAMPP i wejść na `http://localhost/nazwa-folderu/`.
3. Klikaj, pisz w polu i wysyłaj formularz. Wynik widać na stronie, a kilka dodatkowych napisów
   w konsoli: F12, zakładka `Console`.
4. Zadania otwierasz tak samo, na przykład `tasks/01-like-button.html`. Po każdej zmianie w pliku `.js`
   zapisz go i odśwież stronę klawiszem F5.

## Co jest w plikach

- `index.html` i `script.js`: przycisk z dwoma nasłuchami `click`, formularz `#signup`, który nie wyśle
  pustego pola, licznik `keyCount` przy `keydown` i napis ustawiany po zdarzeniu `load`.
- `style.css`: wspólny wygląd wszystkich stron, także tych w `tasks`.
- `tasks/01-like-button`: przycisk „Lubię to”, który liczy kliknięcia, i drugi nasłuch na tym samym
  przycisku.
- `tasks/02-color-picker`: jedna funkcja dla trzech przycisków, które rozróżnia `event.target`.
- `tasks/03-key-counter`: licznik klawiszy, ostatni klawisz z `event.key` i czyszczenie pola Escape'em.
- `tasks/04-guest-list`: formularz dopisujący gości do listy na stronie, z komunikatem przy pustym polu.
- `tasks/05-seat-booking`: dla chętnych, rezerwacja miejsc z limitem, stan zapisany w tablicy.

Każde zadanie to dwa pliki: strona `.html` z treścią zadania i plik `.js`, który uzupełniasz. Na górze
pliku `.js` jest opis tego, co ma się stać po kliknięciu albo wpisaniu tekstu.

## Co zmienić

- `script.js`: na końcu, w miejscu `TU ZMIEŃ`, dodaj drugi przycisk w `index.html` i podepnij do niego
  własną funkcję.
- `tasks/01-like-button.js`: dokończ `handleLike`, napisz `logLike` i podepnij obie funkcje pod
  kliknięcie. Po trzech kliknięciach strona pokazuje „Polubienia: 3”.
- `tasks/02-color-picker.js`: dokończ `handleColorClick` i w pętli `for...of` podepnij ją pod każdy
  przycisk. Po kliknięciu „Zielony” pole pokazuje „Wybrano: Zielony” na zielonym tle.
- `tasks/03-key-counter.js`: dokończ `handleKeydown` i podepnij ją pod `keydown`. Po wpisaniu „kot”
  i Escape strona pokazuje „Naciśnięcia klawiszy: 4” i „Ostatni klawisz: Escape”, a pole jest puste.
- `tasks/04-guest-list.js`: dokończ `handleSubmit` i podepnij ją pod `submit` formularza. Po zapisaniu
  „Ala” i „Olek” na liście są dwie osoby, a strona ani razu się nie przeładowała.
- `tasks/05-seat-booking.js`: napisz `handleSeatClick` i `handleReset`. Po czwartej rezerwacji strona
  pokazuje „Limit: najwyżej 3 miejsca.”.

## Częste błędy

- Komunikat pojawia się od razu po wczytaniu strony, a kliknięcie nic nie robi: przy nazwie funkcji
  w `addEventListener` są nawiasy. `handleClick()` uruchamia funkcję od razu, a nasłuch dostaje jej
  wynik. Wpisz samą nazwę: `button.addEventListener("click", handleClick);`.
- Nasłuch nigdy się nie odpala i nie ma żadnego błędu: literówka w nazwie zdarzenia. Nazwy piszemy
  małymi literami i bez `on`: `"click"`, `"keydown"`, `"submit"`, nie `"onclick"` ani `"Click"`.
- Funkcja wykonuje się dwa razy na jedno kliknięcie: w HTML został atrybut `onclick`, a w JS doszedł
  `addEventListener`. Usuń atrybut z HTML.
- `event.preventDefault()` raz działa, a raz kończy się błędem `ReferenceError: event is not defined`:
  funkcja obsługi nie ma parametru. Wpisz go w nawiasach definicji, `function handleSubmit(event)`,
  a przeglądarka sama go przekaże.
- Strona i tak się przeładowuje i lista znika: nasłuch `submit` jest podpięty do przycisku zamiast do
  formularza albo w funkcji brakuje `event.preventDefault()`. Zdarzenie `submit` odpala się na `<form>`.
- `Uncaught TypeError: Cannot read properties of null (reading 'addEventListener')`: `getElementById`
  nie znalazło elementu. Sprawdź, czy id w HTML jest napisane tak samo jak w JS, co do litery.
- Warunek przy pustym polu zawsze przepuszcza, a pole się czyści: w `if` jest `=` zamiast `===`.
  Pojedyncze `=` wpisuje wartość, a do porównania potrzebne są trzy znaki.
