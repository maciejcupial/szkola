# Szablony do ćwiczeń

Gotowe pliki startowe do lekcji ze stron internetowych, PHP, JavaScript i Pythona w technikum. Każdy folder to jeden
szablon: otwierasz go w Visual Studio Code, zmieniasz miejsca oznaczone `TU ZMIEŃ` i masz działający
punkt wyjścia zamiast pustego pliku.

## Jak pobrać

1. Zielony przycisk **Code** u góry strony → **Download ZIP**.
2. Rozpakuj ZIP i skopiuj tylko ten folder, którego potrzebujesz, do swojego repozytorium z pracami.
3. Masz GitHub Desktop? Zamiast ZIP-a: **Code → Open with GitHub Desktop**, a potem kopiujesz folder tak samo.

Nie edytuj plików w tym repozytorium. Kopiujesz je do siebie i tam pracujesz.

## Co tu jest

| Klasa | Szablon | Kiedy się przyda |
|---|---|---|
| 3TI | [`3TI/starter-page`](3TI/starter-page) | pierwsza strona: HTML + CSS + JavaScript w trzech plikach |
| 3TI | [`3TI/multi-page-site`](3TI/multi-page-site) | trzy podstrony z wspólnym menu i formularzem kontaktowym |
| 3TI | [`3TI/js-exercise`](3TI/js-exercise) | ćwiczenia z JavaScript: pole, przycisk i miejsce na wynik |
| 3TI | [`3TI/form-validation`](3TI/form-validation) | sprawdzanie formularza w JavaScript przed wysłaniem |
| 4Ti | [`4Ti/php-start`](4Ti/php-start) | pierwszy skrypt PHP w XAMPP |
| 4Ti | [`4Ti/php-form`](4Ti/php-form) | odbiór danych z formularza w PHP i sprawdzenie pustych pól |
| 4Ti | [`4Ti/php-mysql-crud`](4Ti/php-mysql-crud) | lista, dodawanie, edycja i usuwanie wpisów w bazie MySQL (PDO) |
| 4Ti | [`4Ti/js-dom-start`](4Ti/js-dom-start) | strona z elementami do ćwiczeń z DOM |
| 4Ti | [`4Ti/tic-tac-toe`](4Ti/tic-tac-toe) | plansza 3×3 gotowa, logika gry do napisania |
| 4Ti | [`4Ti/blog-github-pages`](4Ti/blog-github-pages) | blog na cztery strony do publikacji na GitHub Pages |
| 2TI | [`2TI/personal-website`](2TI/personal-website) | strona WWW z arkuszem stylów i wersją na telefon |
| 2TI | [`2TI/python-start`](2TI/python-start) | pierwszy program w Pythonie i trzy zadania do uzupełnienia |

Każdy folder ma własny `README.md` z instrukcją „jak uruchomić”, opisem plików, listą miejsc do zmiany
i najczęstszymi błędami.

## Kod z lekcji

W folderze [`demo`](demo) jest kod, który pokazuję na rzutniku, i wzorcowe rozwiązania ćwiczeń z lekcji.
Każdy plik ma nagłówek z numerem lekcji i slajdu, a oczekiwany wynik stoi w komentarzu obok linii.

| Klasa | Folder | Lekcja |
|---|---|---|
| 2TI | [`demo/2TI/html-css`](demo/2TI/html-css) | strona z lekcji 2 i 3 plus arkusz stylów; `find-the-errors.html` z trzema błędami z podręcznika |
| 3TI | [`demo/3TI/html-links`](demo/3TI/html-links) | łącza: trzy podstrony, kotwica, `mailto:`, `tel:` |
| 3TI | [`demo/3TI/html-images`](demo/3TI/html-images) | obrazy: `img`, `alt`, wymiary, `figure`, obraz jako łącze |
| 3TI | [`demo/3TI/html-tables`](demo/3TI/html-tables) | tabele: `caption`, `thead`, `tbody`, `tfoot`, `scope`, `colspan`, `rowspan` |
| 3TI | [`demo/3TI/html-forms`](demo/3TI/html-forms) | formularze: `form`, `label`, pola, `sent.html` z objaśnieniem adresu |
| 3TI | [`demo/3TI/lab-head-blocks`](demo/3TI/lab-head-blocks) | pracownia: sekcja `head` i bloki strony |
| 3TI | [`demo/3TI/lab-lists`](demo/3TI/lab-lists) | pracownia: listy `ul`, `ol`, `dl`, zagnieżdżone |
| 3TI | [`demo/3TI/lab-tables`](demo/3TI/lab-tables) | pracownia: tabela ocen z `tfoot` |
| 4Ti | [`demo/4Ti/php-arrays`](demo/4Ti/php-arrays) | tablice zwykłe i asocjacyjne |
| 4Ti | [`demo/4Ti/php-operators`](demo/4Ti/php-operators) | operatory |
| 4Ti | [`demo/4Ti/php-conditions`](demo/4Ti/php-conditions) | if, else, elseif, switch, match, `?:`, `??` |
| 4Ti | [`demo/4Ti/php-loops`](demo/4Ti/php-loops) | pętle for, while, do...while, foreach |
| 4Ti | [`demo/4Ti/php-functions`](demo/4Ti/php-functions) | własne funkcje: parametry, return, wartości domyślne, zasięg |
| 4Ti | [`demo/4Ti/php-builtin-functions`](demo/4Ti/php-builtin-functions) | funkcje wbudowane: tekst, liczby, typy, data |
| 4Ti | [`demo/4Ti/php-oop`](demo/4Ti/php-oop) | klasy, obiekty, konstruktor, destruktor, widoczność |

Pliki PHP uruchamiasz w XAMPP tak samo jak szablony (folder do `htdocs`) albo z terminala w danym folderze:

```
php -S localhost:8000
```

i adres `http://localhost:8000/arrays.php`. Pliki `quiz*.php` to ćwiczenia „co wypisze?”: najpierw odpowiedz sam,
potem uruchom.

## Jak czytać kod

- Nazwy zmiennych, funkcji, klas CSS i komentarze są po angielsku. Tak wygląda kod w prawdziwych
  projektach i tak piszemy na lekcjach. Teksty widoczne na stronie zostają po polsku.
- Każda linia, która może budzić pytanie, ma komentarz obok. Czytaj plik od góry do dołu jak przewodnik.
- `TU ZMIEŃ` oznacza miejsce, które podmieniasz na własne. Resztę możesz zmieniać, gdy rozumiesz, co robi.
