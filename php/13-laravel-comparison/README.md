# PHP w pracy: ta sama lista produktów w Laravelu

Do lekcji 27 kursu PHP (4Ti: lekcja 29, po sprawdzianie).

To nie jest kurs frameworka. Folder pokazuje, jak wygląda w Laravelu (jednym z najpopularniejszych
frameworków PHP) ta sama lista produktów, którą budowaliśmy na lekcjach: tabela `products` z kolumnami
`id`, `name`, `price`, jak w `php/10-mysql-database/lesson/setup.sql`, oraz formularz dodawania produktu
ze sprawdzaniem pól. W `lesson/` są tylko pliki, które piszemy sami. Resztę, razem z tysiącami plików
bibliotek, Laravel tworzy sam jednym poleceniem.

Komentarze w kodzie są po angielsku i tylko tam, gdzie coś może być niejasne.

## Jak uruchomić

Pliki z `lesson/` nie działają same, bo korzystają z Laravela. Na lekcji wystarczy je czytać obok
własnego sklepu z `php/11-include-errors`. Kto chce zobaczyć je w przeglądarce, robi projekt według
sekcji niżej.

## Jak uruchomić cały projekt

Potrzebujesz PHP i Composera (programu, który pobiera biblioteki PHP). Composer dla Windows
instalujesz z `getcomposer.org` (plik `Composer-Setup.exe`, przy instalacji wskaż
`C:\xampp\php\php.exe`).

1. Otwórz terminal w folderze, w którym ma powstać projekt, i wpisz:
   ```
   composer create-project laravel/laravel shop
   ```
   Composer sam wybierze wersję Laravela pasującą do Twojego PHP: dla PHP 8.2 z XAMPP będzie to
   Laravel 12, dla PHP 8.3 i nowszego Laravel 13. Pliki z tego folderu działają w obu.
2. Skopiuj zawartość `lesson/` do folderu `shop`, zgadzając się na zastąpienie `routes/web.php`.
   Foldery się pokrywają: `app` do `app`, `routes` do `routes` i tak dalej.
3. Wejdź do projektu i utwórz tabelę `products`:
   ```
   cd shop
   php artisan migrate
   ```
   Laravel domyślnie trzyma dane w pliku `database/database.sqlite`, więc MySQL nie jest potrzebny.
4. Uruchom serwer:
   ```
   php artisan serve
   ```
5. Otwórz `http://localhost:8000/products`. Lista jest pusta: kliknij „Dodaj produkt” i dodaj
   Kubek (19.90), Długopis (3.50) i Zeszyt (7.20). Serwer zatrzymujesz w terminalu klawiszami Ctrl+C.

## Co jest w plikach

Obok każdego pliku Laravela jego odpowiednik z naszego sklepu podzielonego na pliki.

- `routes/web.php`: który adres uruchamia którą metodę kontrolera. U nas tę rolę miało to, że
  każda strona była osobnym plikiem `.php`.
- `app/Http/Controllers/ProductController.php`: kontroler, jak nasz `index.php`. Metoda `index()`
  pobiera produkty i wybiera widok, `create()` pokazuje formularz, `store()` sprawdza pola i zapisuje.
- `app/Models/Product.php`: model, jak nasz `functions.php` z zapytaniami. Nie ma tu ani jednej linii
  SQL: `Product::orderBy('id')->get()` to `SELECT`, a `Product::create($data)` to `INSERT` z zapytaniem
  przygotowanym.
- `resources/views/products/index.blade.php`: widok listy, jak nasze pliki w `templates/`.
  `{{ $product->name }}` robi to samo co `<?= htmlspecialchars($product["name"]) ?>`.
- `resources/views/products/create.blade.php`: formularz. `@error` pokazuje komunikat przy polu,
  `old('name')` wpisuje z powrotem to, co ktoś już wpisał, `@csrf` dodaje ukryty kod
  zabezpieczający formularz.
- `database/migrations/..._create_products_table.php`: ta sama tabela co w `setup.sql`, tylko
  zapisana w PHP. `php artisan migrate` zamienia ją na `CREATE TABLE`.

## Co zmienić

- Dodaj produkt o nazwie `<b>Promocja</b>` i zobacz, że na liście widać znaczniki jako zwykły tekst,
  a nie pogrubienie. To automatyczne `htmlspecialchars()` w `{{ }}`.
- Wyślij formularz z pustą nazwą albo z ceną `abc` i przeczytaj komunikaty przy polach.
- W `ProductController.php` zmień `orderBy('id')` na `orderBy('price')` i odśwież listę.

## Częste błędy

- `could not find driver` przy `php artisan migrate`: PHP nie ma włączonej obsługi SQLite. W pliku
  `C:\xampp\php\php.ini` usuń średnik przed `extension=pdo_sqlite` i `extension=sqlite3`, potem
  otwórz nowy terminal.
- `419 Page Expired` po wysłaniu formularza: w formularzu brakuje `@csrf`.
- „Cena musi być liczbą.” przy cenie `12,50`: w PHP część dziesiętną oddziela kropka, wpisz `12.50`.
- `Target class [...ProductController] does not exist`: plik kontrolera trafił do złego folderu albo
  w `routes/web.php` brakuje linii `use App\Http\Controllers\ProductController;`.
- `View [products.index] not found`: widoki muszą leżeć w `resources/views/products/`, a ich nazwy
  kończyć się na `.blade.php`.
