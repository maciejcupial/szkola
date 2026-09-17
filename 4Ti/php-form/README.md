# Formularz zgłoszeniowy w PHP

Dwa pliki pokazują drogę danych: `form.html` zbiera dane, a `receive.php` je odbiera, sprawdza,
czy nie są puste, i wypisuje na ekranie. Komentarze w kodzie są po angielsku: tak wygląda kod
w prawdziwych projektach, a każda linia jest opisana.

## Jak uruchomić

1. Uruchom XAMPP i włącz **Apache**.
2. Skopiuj ten folder do `C:\xampp\htdocs\` (na Macu: `/Applications/XAMPP/htdocs/`), np. jako
   `htdocs/php-form`.
3. W przeglądarce wpisz `http://localhost/php-form/form.html`.
4. Wypełnij pola i naciśnij „Wyślij”. Przeglądarka przejdzie na `receive.php`.
5. Sprawdź też, co się stanie, gdy wyślesz pusty formularz.

## Co jest w plikach

- `form.html`: strona z formularzem, stylami i opisem pól.
- `receive.php`: skrypt, który odczytuje dane, sprawdza puste pola i wypisuje wynik.

## Co zmienić

- `form.html`: tytuł strony, nagłówek i pola. Każde pole potrzebuje trzech rzeczy:
  `<label for="...">`, `id` oraz `name`. PHP odczytuje pole po `name`, więc bez niego dane nie dojdą.
- `form.html`: sekcja `<style>`, jeśli chcesz inne kolory. Zmienne `--accent`, `--background`
  i pozostałe z bloku `:root` działają w całym pliku.
- `receive.php`: tablica `$requiredFields`. Klucz to `name` z formularza, wartość to polska etykieta
  pokazywana na ekranie. Dopisanie nowego pola to jedna linia w tej tablicy.
- `receive.php`: teksty w `<h1>` i w akapitach, jeśli chcesz inne komunikaty.

## Częste błędy

- **Zamiast strony widzisz kod PHP.** Plik został otwarty podwójnym kliknięciem. PHP działa tylko
  przez `http://localhost`, więc wpisz ten adres w przeglądarce, z włączonym Apache.
- **`Warning: Undefined array key "..."`.** W formularzu brakuje atrybutu `name` albo jest tam inny
  tekst niż klucz użyty w `receive.php`. Oba muszą być identyczne, z tymi samymi wielkimi literami.
- **Polskie znaki wyglądają jak krzaczki.** Brakuje `<meta charset="UTF-8">` w nagłówku strony
  albo plik został zapisany w innym kodowaniu niż UTF-8. Ustaw UTF-8 w edytorze i zapisz ponownie.
- **Formularz wysyła, ale strona `receive.php` się nie otwiera.** W `action` jest zła nazwa pliku.
  Musi to być dokładnie ta nazwa, którą widzisz w folderze.
