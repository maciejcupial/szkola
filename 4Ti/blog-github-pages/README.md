# Blog na GitHub Pages

Cztery strony bloga ze wspólnym menu, jednym arkuszem stylów, przełącznikiem trybu ciemnego
i sprawdzaniem formularza kontaktowego. Szablon jest gotowy do wrzucenia na GitHub Pages.

Komentarze w kodzie są po angielsku: tak wygląda kod w prawdziwych projektach, a każda linia jest opisana.

## Jak uruchomić

1. Skopiuj cały folder do siebie.
2. Otwórz `index.html` w VS Code i uruchom go przez Live Server.
3. Klikaj menu: „Start”, „Wpisy”, „Kontakt”. Wszystkie strony działają od razu.

## Jak opublikować

1. Skopiuj zawartość folderu do głównego katalogu swojego repozytorium, czyli same pliki, nie folder.
2. GitHub Desktop: Commit, potem Push.
3. Na GitHubie: Settings, Pages, Branch `main`, folder `/ (root)`, Save.
4. Po minucie blog jest pod adresem `https://TWOJ-LOGIN.github.io/NAZWA-REPO/`.

## Co jest w plikach

- `index.html`: strona startowa z powitaniem i zajawką najnowszego wpisu.
- `posts.html`: lista wszystkich wpisów, każdy jako karta `.card`.
- `post.html`: pojedynczy wpis, wzór do kopiowania przy nowym tekście.
- `contact.html`: formularz kontaktowy z polami `name`, `email` i `message`.
- `style.css`: wszystkie style, kolory jako zmienne na górze pliku.
- `script.js`: rok w stopce, tryb ciemny i sprawdzanie formularza.

## Co zmienić

- Miejsca do zmiany są podpisane w kodzie znacznikiem `TU ZMIEŃ`.
- Nazwa bloga i podpis autora: `.logo` oraz stopka w każdym pliku HTML.
- Nowy wpis: skopiuj `post.html` pod nową nazwą, zmień treść w `article.post`
  i dodaj do `posts.html` kolejną kartę `.card` z linkiem do tej kopii.
- Kolory: zmienne `--background`, `--text`, `--muted`, `--accent`, `--border`, `--card`
  w `:root` (wersja jasna) i w `body.dark` (wersja ciemna).
- Reguły formularza i treści komunikatów: funkcja `validate()` w `script.js`.

## Częste błędy

- Po publikacji widzisz błąd 404. Pliki trafiły do podfolderu zamiast do głównego katalogu repozytorium
  albo plik nazywa się `Index.html` wielką literą. Przenieś pliki wyżej i nazwij plik `index.html`.
- Na GitHub Pages strona jest bez stylów. W `<link>` jest ścieżka bezwzględna `/style.css`.
  Wpisz ścieżkę względną `style.css`.
- Tryb ciemny wraca do jasnego po odświeżeniu. Brakuje linii z `localStorage` w `script.js`:
  zapisu `localStorage.setItem("theme", ...)` przy kliknięciu albo odczytu `localStorage.getItem("theme")`
  przy starcie strony.
