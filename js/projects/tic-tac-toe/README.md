# Kółko i krzyżyk: plansza gotowa, gra do napisania

Plansza 3x3 i jej wygląd są zrobione. W `script.js` czeka szkielet gry: tablica z polami, informacja
o tym, czyj jest ruch, i lista ośmiu linii wygrywających. Do napisania zostały dwie funkcje.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Otwórz plik `index.html` w przeglądarce (dwuklik wystarczy).
3. Wciśnij `F12` i przejdź na zakładkę „Console”: po kliknięciu pola zobaczysz tam jego numer.
4. Po każdej zmianie w plikach odśwież stronę klawiszem `F5`.

## Co jest w plikach

- `index.html`: plansza z dziewięcioma przyciskami, linia statusu i przycisk „Nowa gra”.
- `style.css`: kolory, siatka 3x3 i wygląd pól.
- `script.js`: stan gry i dwie funkcje do uzupełnienia.
- `README.md`: ten opis.

## Co zmienić

W `script.js` uzupełnij dwie funkcje oznaczone `TU ZMIEŃ`. W środku każdej z nich są ponumerowane
kroki, które mówią dokładnie, co napisać.

- `makeMove(index)`: zablokuj ruch, gdy gra się skończyła albo pole jest zajęte, zapisz znak
  w tablicy `board`, pokaż go na przycisku, sprawdź wynik przez `findWinner()`, a jeśli gra trwa dalej,
  zmień `currentPlayer` i zaktualizuj `statusText`.
- `findWinner()`: przejdź przez `WINNING_LINES` i zwróć `"X"` albo `"O"`, gdy trzy pola w linii mają
  ten sam znak. Gdy nie ma już pustych pól, zwróć `"draw"`. W każdym innym przypadku `null`.

Gdy obie funkcje działają, możesz zmienić tytuł strony w `index.html` (linia z `TU ZMIEŃ`)
i kolory znaków w `style.css` w regułach `.cell.x` oraz `.cell.o`.

## Częste błędy

- Klikasz zajęte pole i znak się podmienia: brakuje sprawdzenia z kroku 1 w `makeMove`,
  czyli `board[index] !== ""`. Dopisz `return` na początku funkcji.
- Ktoś wygrał, a gra leci dalej: po ogłoszeniu wyniku nie ustawiasz `gameOver = true`,
  więc kolejne kliknięcia wciąż wpisują znaki.
- Nikt nigdy nie wygrywa: w `findWinner()` porównujesz pojedynczym `=` zamiast `===`
  (jeden znak równości przypisuje wartość, trzy porównują) albo nie sprawdzasz, czy pole nie jest puste,
  i trzy puste pola w linii wyglądają wtedy jak wygrana.
- Nic się nie dzieje po kliknięciu: zajrzyj do konsoli (`F12`), czerwony komunikat pokaże numer linii
  z literówką.
