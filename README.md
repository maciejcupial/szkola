# Szablony do ćwiczeń

Gotowe pliki startowe do lekcji ze stron internetowych, PHP, JavaScript i Pythona w technikum. Każdy folder to
jeden temat albo szablon: otwierasz go w Visual Studio Code, zmieniasz miejsca oznaczone `TU ZMIEŃ` i masz
działający punkt wyjścia zamiast pustego pliku.

## Jak pobrać

1. Zielony przycisk **Code** u góry strony → **Download ZIP**.
2. Rozpakuj ZIP i skopiuj tylko ten folder, którego potrzebujesz, do swojego repozytorium z pracami.
3. Masz GitHub Desktop? Zamiast ZIP-a: **Code → Open with GitHub Desktop**, a potem kopiujesz folder tak samo.

Nie edytuj plików w tym repozytorium. Kopiujesz je do siebie i tam pracujesz.

## Jak to jest ułożone

Jeden folder na technologię: [`html-css`](html-css), [`js`](js), [`php`](php), [`python`](python). W kursach
PHP, JavaScript i Python każdy temat ma swój folder, a w nim wszystko razem:

- przykład (`index.php`, `index.html` albo `main.py`), który działa od razu,
- `lesson/` z kodem, który pokazuję na lekcji, i rozwiązaniami ćwiczeń ze slajdów,
- `tasks/` z zadaniami do zrobienia samemu.

W każdej technologii folder `projects` trzyma większe szablony startowe do projektów.

## Znajdź swoją klasę

| Klasa | Przedmiot | Gdzie szukać |
|---|---|---|
| 2TI | Informatyka | [`html-css/first-website`](html-css/first-website), [`html-css/projects/personal-website`](html-css/projects/personal-website), [`python`](python) |
| 3TI | Strony i aplikacje internetowe | [`html-css`](html-css): `links`, `images`, `tables`, `forms`; [`html-css/projects`](html-css/projects): `starter-page`, `multi-page-site`; [`js/projects`](js/projects): `exercise`, `form-validation` |
| 3TI | Pracownia aplikacji internetowych | [`html-css`](html-css): `lab-head-blocks`, `lab-lists`, `lab-tables` |
| 4Ti | Strony i aplikacje internetowe | [`php`](php) (lekcje 03–29 i 89), [`js`](js) (lekcje 31–70 i 90), [`html-css/projects/blog-github-pages`](html-css/projects/blog-github-pages) (71–80) |

## HTML i CSS

| Folder | Co tam jest |
|---|---|
| [`html-css/first-website`](html-css/first-website) | strona z lekcji 2 i 3 plus arkusz stylów; `find-the-errors.html` z trzema błędami z podręcznika |
| [`html-css/links`](html-css/links) | łącza: trzy podstrony, kotwica, `mailto:`, `tel:` |
| [`html-css/images`](html-css/images) | obrazy: `img`, `alt`, wymiary, `figure`, obraz jako łącze |
| [`html-css/tables`](html-css/tables) | tabele: `caption`, `thead`, `tbody`, `tfoot`, `scope`, `colspan`, `rowspan` |
| [`html-css/forms`](html-css/forms) | formularze: `form`, `label`, pola, `sent.html` z objaśnieniem adresu |
| [`html-css/lab-head-blocks`](html-css/lab-head-blocks) | pracownia: sekcja `head` i bloki strony |
| [`html-css/lab-lists`](html-css/lab-lists) | pracownia: listy `ul`, `ol`, `dl`, zagnieżdżone |
| [`html-css/lab-tables`](html-css/lab-tables) | pracownia: tabela ocen z `tfoot` |
| [`html-css/projects/starter-page`](html-css/projects/starter-page) | pierwsza strona: HTML + CSS + JavaScript w trzech plikach |
| [`html-css/projects/multi-page-site`](html-css/projects/multi-page-site) | trzy podstrony ze wspólnym menu i formularzem kontaktowym |
| [`html-css/projects/personal-website`](html-css/projects/personal-website) | strona WWW z arkuszem stylów i wersją na telefon |
| [`html-css/projects/blog-github-pages`](html-css/projects/blog-github-pages) | blog na cztery strony do publikacji na GitHub Pages |

## Python

Na start: [`python/projects/start`](python/projects/start), pierwszy program i trzy zadania do uzupełnienia.
Potem dziewięć tematów kursu Python, w kolejności lekcji. W każdym jest `main.py` z działającym przykładem i
folder `tasks` z zadaniami do dokończenia. Nagłówek każdego zadania mówi, co program ma wypisać, więc
sprawdzisz się sam.

| Szablon | Lekcje kursu | Co ćwiczysz |
|---|---|---|
| [`python/01-variables-input`](python/01-variables-input) | 01–04 | `print`, zmienne, `input`, `int`, działania `//` i `%` |
| [`python/02-conditions`](python/02-conditions) | 05–06 | `if`, `elif`, `else`, `and`, `or`, `not` |
| [`python/03-loops`](python/03-loops) | 07–08 | pętle `while` i `for`, `range`, `break`, zbieranie sumy |
| [`python/04-lists-strings`](python/04-lists-strings) | 09–11 | listy, pętla po liście, napisy, wycinki |
| [`python/05-functions-modules`](python/05-functions-modules) | 12–14 | własne funkcje, `math`, `random`, słowniki |
| [`python/06-files-errors`](python/06-files-errors) | 15–16 | zapis i odczyt pliku, `try` i `except` |
| [`python/07-algorithms`](python/07-algorithms) | 18–26 | system dwójkowy, liczby pierwsze, wyszukiwanie, sortowanie |
| [`python/08-guessing-game`](python/08-guessing-game) | 27 | projekt: gra w zgadywanie liczby i trzy rozszerzenia |
| [`python/09-classes-objects`](python/09-classes-objects) | 28–29 | klasy i obiekty: konstruktor, `self`, metody, lista obiektów, dziedziczenie |

Nazwy zmiennych i funkcji w Pythonie piszemy małymi literami z podkreśleniem, na przykład `total_price`. Tak
zaleca PEP 8, przewodnik stylu Pythona, i tak jest we wszystkich plikach tutaj.

## PHP

Trzynaście tematów kursu PHP (w klasie 4Ti to lekcje 03–29 i 89). Logika jest oddzielona od HTML-a: do tematu
10 blok PHP na górze pliku i czysty widok pod nim, od tematu 11 osobne pliki: kontroler, model i widoki w
`templates/`. W każdym jest `index.php` z działającym przykładem, `lesson/` z kodem z lekcji (od tematu 02) i
folder `tasks` z zadaniami: pierwsze ćwiczy to, co było na slajdach, kolejne łączą temat z wcześniejszymi
lekcjami, ostatnie jest „dla chętnych”. Nagłówek każdego zadania mówi, co ma pokazać strona.

| Szablon | Lekcje kursu | Lekcje 4Ti | Co ćwiczysz |
|---|---|---|---|
| [`php/01-variables-strings`](php/01-variables-strings) | 01 | 03 | zmienne, typy, łączenie tekstu, `mb_` do polskich liter |
| [`php/02-arrays`](php/02-arrays) | 02 | 04 | tablice zwykłe i asocjacyjne, tablica w tablicy |
| [`php/03-operators`](php/03-operators) | 03 | 05 | działania, `%`, `==` i `===`, `&&`, `\|\|`, `!` |
| [`php/04-conditions`](php/04-conditions) | 04–05 | 06–07 | `if`, `elseif`, `switch`, `match`, `?:`, `??` |
| [`php/05-loops`](php/05-loops) | 06–07 | 08–09 | `for`, `while`, `foreach`, `break`, `continue`, tabela w pętli |
| [`php/06-functions`](php/06-functions) | 08–10 | 10–12 | własne funkcje, `return`, wartości domyślne, zasięg zmiennych |
| [`php/07-builtin-functions`](php/07-builtin-functions) | 11–12 | 13–14 | gotowe funkcje na tekst, liczby, typy i datę |
| [`php/08-classes-objects`](php/08-classes-objects) | 13–15 | 15–17 | klasa, obiekt, konstruktor, `private`, gettery i settery |
| [`php/09-forms`](php/09-forms) | 16–17 | 18–19 | `$_GET`, `$_POST`, sprawdzanie pól, pola zachowują wpisane dane |
| [`php/10-mysql-database`](php/10-mysql-database) | 18–22 | 20–24 | MySQL przez `mysqli`: `SELECT`, `INSERT`, `UPDATE`, `DELETE`, błędy |
| [`php/11-include-errors`](php/11-include-errors) | 23–24 | 25–26 | `include`, `require`, wspólny nagłówek, czytanie błędów, `try` |
| [`php/12-sessions-cookies`](php/12-sessions-cookies) | 26 | 89 | sesja, ciasteczko, koszyk, zapis licznika do pliku |
| [`php/13-laravel-comparison`](php/13-laravel-comparison) | 27 | 29 | ta sama lista produktów w Laravelu: trasa, kontroler, model, widok Blade |

Projekty w [`php/projects`](php/projects): `start` (pierwszy skrypt w XAMPP), `form` (formularz z kontrolą
pustych pól), `mysql-crud` (lista, dodawanie, edycja i usuwanie w MySQL przez PDO).

Temat z bazą danych używa `mysqli`, bo tak wygląda kod na egzaminie INF.03. Dane od użytkownika zawsze
trafiają do zapytania przez `mysqli_prepare`, nigdy przez sklejanie tekstu.

## JavaScript

Dziewięć tematów kursu JavaScript (w klasie 4Ti to lekcje 31–55 i 66–67). Każde zadanie to strona `.html` z
treścią zadania i plik `.js` do uzupełnienia. Otwierasz stronę w przeglądarce, a wynik widzisz w konsoli (F12)
albo na samej stronie. Oczekiwany wynik jest na stronie zadania i w nagłówku pliku `.js`.

| Szablon | Lekcje kursu | Lekcje 4Ti | Co ćwiczysz |
|---|---|---|---|
| [`js/01-script-variables`](js/01-script-variables) | 01–04 | 31–34 | gdzie wstawić skrypt, konsola, `let`, `const`, typy |
| [`js/02-operators`](js/02-operators) | 05–06 | 35–36 | działania, tekst z formularza a liczba, `===`, `&&`, `\|\|` |
| [`js/03-conditions-loops`](js/03-conditions-loops) | 07–10 | 37–40 | `if`, `switch`, `for`, `while`, `break`, `continue` |
| [`js/04-arrays`](js/04-arrays) | 11–13 | 41–43 | tablice, `push`, `shift`, `indexOf`, pętla po tablicy |
| [`js/05-objects`](js/05-objects) | 14–15 | 44–45 | obiekty, metody, `this`, tablica obiektów |
| [`js/06-functions`](js/06-functions) | 16–19 | 46–49 | własne funkcje, przyciski, zmienne lokalne, `parseFloat`, `Math` |
| [`js/07-dom`](js/07-dom) | 20–25 | 50–55 | szukanie elementów, zmiana tekstu i stylu, `setAttribute`, nowe elementy |
| [`js/08-events`](js/08-events) | 26–27 | 66–67 | `addEventListener`, `click`, `keydown`, `submit`, `event.target` |
| [`js/09-fetch-json`](js/09-fetch-json) | 31 | 90 | PHP zwraca JSON, JavaScript pobiera go przez `fetch` i buduje stronę |

Projekty w [`js/projects`](js/projects): `tic-tac-toe` (lekcje 68–70, plansza gotowa, logika do napisania),
`dom-start` (strona do ćwiczeń z DOM), `exercise` (pole, przycisk i miejsce na wynik), `form-validation`
(sprawdzanie formularza przed wysłaniem).

Każdy folder ma własny `README.md` z instrukcją „jak uruchomić”, opisem plików, listą miejsc do zmiany i
najczęstszymi błędami.

## Jak uruchomić kod z lekcji

Pliki PHP z folderów `lesson/` uruchamiasz w XAMPP tak samo jak przykłady (folder do `htdocs`) albo z
terminala w danym folderze:

```
php -S localhost:8000
```

i adres `http://localhost:8000/loops.php`. Każdy plik ma nagłówek z numerem lekcji i slajdu, a oczekiwany
wynik stoi w komentarzu obok linii. Pliki `quiz*.php` to ćwiczenia „co wypisze?”: najpierw odpowiedz sam,
potem uruchom.

## Jak czytać kod

- Nazwy zmiennych, funkcji, klas CSS i komentarze są po angielsku. Tak wygląda kod w prawdziwych projektach i
  tak piszemy na lekcjach. Teksty widoczne na stronie zostają po polsku.
- Komentarzy jest mało: tylko tam, gdzie coś może być niejasne. Resztę czytasz z samego kodu.
- `TU ZMIEŃ` oznacza miejsce, które podmieniasz na własne. Resztę możesz zmieniać, gdy rozumiesz, co robi.
