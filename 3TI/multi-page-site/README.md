# Strona wielostronicowa

Trzy podstrony (`index.html`, `about.html`, `contact.html`) z tym samym menu i jednym wspólnym
arkuszem stylów. Na stronie kontaktu jest formularz, który na razie nic nie wysyła.

Komentarze w kodzie są po angielsku: tak wygląda kod w prawdziwych projektach, a każda linia
jest opisana.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Otwórz folder w Visual Studio Code.
3. Kliknij prawym przyciskiem na `index.html` i wybierz „Open with Live Server”.
4. Klikaj w menu i sprawdź, czy wszystkie trzy podstrony się otwierają.

## Co jest w plikach

- `index.html`: strona główna, wstęp i przycisk prowadzący do „O nas”.
- `about.html`: druga podstrona, opis i lista faktów.
- `contact.html`: trzecia podstrona, formularz kontaktowy.
- `style.css`: wygląd wszystkich trzech podstron, kolory ustawione w jednym miejscu.

## Co zmienić

- Miejsca oznaczone `TU ZMIEŃ`: tytuł w `<title>`, nazwa strony w `<p class="logo">`, treść w `<main>`
  i autor w stopce.
- Kolory: właściwości `--background`, `--text`, `--muted`, `--accent` i `--border` w bloku `:root`
  na początku `style.css`. Reszta pliku czyta je przez `var(...)`, więc nic więcej nie ruszasz.
- Menu jest wpisane osobno w każdym pliku, bo czysty HTML nie umie wstawić wspólnego kawałka kodu.
  Dodajesz podstronę? Dopisz link w `<nav>` we wszystkich trzech plikach.
- Klasa `active` w `<nav>` ma być przy linku do tej podstrony, w której akurat jesteś. Tak jest już
  ustawione w każdym z trzech plików.
- Formularz w `contact.html`: pola mają identyfikatory `name`, `email`, `subject` i `message`.
  Zmieniasz nazwę pola? Popraw ją w trzech miejscach naraz: `id`, `name` i `for` w etykiecie.

## Częste błędy

- Menu działa na jednej podstronie, a na drugiej nie. Link został skopiowany źle, np. `href="about"`
  bez `.html` albo z literówką w nazwie. Sprawdź, czy tekst w `href` jest dokładnie taki sam jak
  nazwa pliku w folderze.
- Podświetlony jest zły link w menu. Klasa `active` została w skopiowanym kawałku kodu przy starej
  podstronie. W każdym pliku ma ją mieć dokładnie jeden link, ten do bieżącej podstrony.
- Formularz „nie wysyła”. Tak ma być na tym etapie: atrybut `action` jest pusty, więc przeglądarka
  tylko przeładowuje stronę. Skrypt PHP podłączysz na późniejszej lekcji.
- Zmiana koloru nic nie daje. Kolor jest wpisany na sztywno w regule zamiast przez `var(--accent)`,
  albo przeglądarka trzyma stary plik CSS w pamięci. Odśwież stronę skrótem Ctrl+Shift+R.
