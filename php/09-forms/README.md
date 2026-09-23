# PHP: formularze, $_GET i $_POST

Do lekcji 16–17 kursu PHP (4Ti: lekcje 18–19).

`index.php` to formularz kontaktowy, który sam odbiera swoje dane: po kliknięciu „Wyślij” strona
wraca do tego samego pliku, a PHP sprawdza pola. `isset()` mówi, czy formularz w ogóle wysłano,
`trim()` obcina spacje z brzegów, `empty()` wyłapuje puste pole, a `filter_var()` sprawdza adres
e-mail. Błąd pojawia się pod złym polem, a wpisany tekst zostaje w formularzu, więc nie trzeba
pisać wszystkiego od nowa. Każda wartość od użytkownika idzie na ekran przez `htmlspecialchars()`.
W folderze `tasks` jest pięć formularzy do dokończenia, od najłatwiejszego do najtrudniejszego.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

1. Uruchom XAMPP i włącz **Apache**.
2. Skopiuj ten folder do `C:\xampp\htdocs\` (na Macu: `/Applications/XAMPP/htdocs/`), na przykład
   jako `htdocs/09-forms`.
3. W przeglądarce wpisz `http://localhost/09-forms/index.php`.
4. Zadania otwierasz tak samo, na przykład `http://localhost/09-forms/tasks/01-contact.php`.
5. Bez XAMPP: w terminalu, stojąc w folderze szablonu, wpisz `php -S localhost:8000`
   i otwórz `http://localhost:8000/index.php`. Serwer zatrzymujesz klawiszami Ctrl+C.
6. W `index.php` sprawdź trzy przypadki: pusty formularz, adres bez `@` i poprawne dane.

## Co jest w plikach

- `index.php`: formularz kontaktowy z polami imię, e-mail i wiadomość, sprawdzaniem każdego pola,
  komunikatem pod złym polem i zachowaniem wpisanych danych.
- `tasks/01-contact.php`: odczyt dwóch pól z `$_POST` i podziękowanie, dokładnie jak na lekcji 16.
- `tasks/02-price-filter.php`: wyszukiwarka produktów tańszych niż podana cena, wysyłana metodą GET.
- `tasks/03-ticket.php`: cena biletu zależna od wieku, lista błędów i dane, które zostają w polach.
- `tasks/04-quiz.php`: quiz z przyciskami wyboru (radio), liczenie punktów i zaznaczone odpowiedzi.
- `tasks/05-pizza-order.php` (dla chętnych): zamówienie z listą rozwijaną, liczbą sztuk
  i polem wyboru (checkbox), błąd pod każdym polem i obiekty klasy `Product`.
- `lesson/`: kod z lekcji, który pokazuję na rzutniku, i rozwiązania ćwiczeń ze slajdów. Każdy plik ma
  nagłówek z numerem lekcji i slajdu, a obok linii komentarz z tym, co wypisze.

## Co zmienić

- `index.php`: w miejscu `TU ZMIEŃ` dodaj własne pole, na przykład temat wiadomości. Potrzebujesz
  `<label>`, pola z `id` i `name`, sprawdzenia w części PHP na górze pliku i komunikatu pod polem.
- `tasks/01-contact.php`: odczytaj oba pola i zbuduj podziękowanie. Dla imienia Jan i wiadomości
  Czesc ma wyjść „Dziękujemy, Jan! Otrzymaliśmy wiadomość: Czesc”.
- `tasks/02-price-filter.php`: dopisz sprawdzenie pustego pola i pętlę `foreach`. Dla ceny 10 mają
  wyjść trzy produkty: Chleb, Masło i Mleko. Po wysłaniu zobacz `?maxPrice=10` w pasku adresu.
- `tasks/03-ticket.php`: uzupełnij funkcję `ticketPrice()`, sprawdzenia i atrybuty `value`.
  Dla Oli w wieku 15 lat ma wyjść „Ola, Twój bilet kosztuje 10 zł.”
- `tasks/04-quiz.php`: policz punkty w pętli i dopisz `checked`. Gdy zaznaczysz b, pominiesz
  pytanie 2 i zaznaczysz c, ma wyjść „Wynik: 1 z 3”.
- `tasks/05-pizza-order.php`: sprawdź cztery pola, pokaż błędy pod nimi i zachowaj wybory.
  Dwie Capricciosy dla Jana to „Do zapłaty: 69,00 zł.”

## Częste błędy

- **Zamiast strony widzisz kod PHP.** Plik został otwarty podwójnym kliknięciem. PHP działa tylko
  przez `http://localhost`, z włączonym Apache albo serwerem `php -S`.
- **`Warning: Undefined array key "userName"`.** W formularzu jest inny `name` niż klucz
  w `$_POST`. PHP rozróżnia wielkie litery: `userName` i `username` to dwa różne klucze. To samo
  ostrzeżenie pojawia się przy pierwszym wejściu na stronę, gdy odczytujesz `$_POST` bez `isset()`.
- **`$_POST` jest pusta, a dane widać w pasku adresu.** Formularz ma `method="get"` albo nie ma
  atrybutu `method` wcale. Wtedy dane są w `$_GET`, nie w `$_POST`.
- **Pole z samymi spacjami przechodzi jako wypełnione.** Brakuje `trim()` przed `empty()`.
- **Adres `janek-at-example` przechodzi.** `empty()` sprawdza tylko, czy coś wpisano. Formę adresu
  sprawdza `filter_var($userEmail, FILTER_VALIDATE_EMAIL)`, porównane przez `=== false`.
- **`Parse error: syntax error, unexpected identifier "Imię"`.** Zwykły cudzysłów w środku napisu
  kończy napis za wcześnie. W komunikatach używaj polskich „…” albo poprzedź cudzysłów
  ukośnikiem: `\"`.
- **Po błędzie formularz jest pusty.** W polu brakuje `value="<?= htmlspecialchars($userName) ?>"`.
  Przy `textarea` tekst wstawiasz między znacznik otwierający i zamykający, a nie do `value`.
- **Cena 10,5 działa jak 10.** PHP zamienia tekst na liczbę do pierwszego znaku, którego nie rozumie,
  a przecinek do nich należy. W polu ceny wpisuj kropkę: 10.5.
