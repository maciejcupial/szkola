<?php
// Classes and objects: a book shelf built from Book objects.
header("Content-Type: text/html; charset=UTF-8");

class Warehouse {
    public $returned = [];
}

class Book {
    public $title;
    public $genre;

    private $pages = 0;

    // Differs from private only in child classes (extends).
    protected $shelf;

    private $warehouse;

    public function __construct($title, $genre, $pages, $warehouse, $shelf = "A") {
        $this->title = $title;
        $this->genre = $genre;
        $this->warehouse = $warehouse;
        $this->shelf = $shelf;
        $this->setPages($pages);
    }

    public function getPages() {
        return $this->pages;
    }

    public function setPages($pages) {
        if ($pages < 1) {
            return false;
        }
        $this->pages = $pages;
        return true;
    }

    public function showInfo() {
        return $this->title . " (" . $this->genre . "), stron: " . $this->pages
            . ", półka " . $this->shelf;
    }

    // A destructor cannot return anything, so it writes the title into the warehouse object.
    public function __destruct() {
        $this->warehouse->returned[] = $this->title;
    }
}

$warehouse = new Warehouse();
$book1 = new Book("Lalka", "powieść", 680, $warehouse);
$book2 = new Book("Quo vadis", "powieść historyczna", 520, $warehouse, "B");
$book1Info = $book1->showInfo();     // Lalka (powieść), stron: 680, półka A
$book2Info = $book2->showInfo();     // Quo vadis (powieść historyczna), stron: 520, półka B

$book1->title = "Lalka, wydanie szkolne";
$book1Renamed = $book1->showInfo();  // Lalka, wydanie szkolne (powieść), stron: 680, półka A

$pagesBefore = $book1->getPages();   // 680
$message = "";
if (!$book1->setPages(-5)) {
    $message = "Odmowa: liczba stron musi być większa od zera.";
}
$book1->setPages(700);
$pagesAfter = $book1->getPages();    // 700
// Fatal error: Cannot access private property Book::$pages
// $pagesAfter = $book1->pages;

$books = [$book1, $book2, new Book("Pan Tadeusz", "epopeja", 340, $warehouse, "B")];
$bookCount = count($books);          // 3
$totalPages = 0;
foreach ($books as $book) {
    $totalPages += $book->getPages();
}                                    // 1560

// After the loop $book still points at „Pan Tadeusz”, so it must be unset too.
unset($books, $book, $book1, $book2);
// $warehouse->returned: Pan Tadeusz, Lalka, wydanie szkolne, Quo vadis
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Klasy i obiekty</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 700px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <h1>Półka z książkami</h1>

  <h2>1. Obiekty z konstruktorem</h2>
  <p><?= htmlspecialchars($book1Info) ?></p>
  <p><?= htmlspecialchars($book2Info) ?></p>
  <p><?= htmlspecialchars($book1Renamed) ?></p>

  <h2>2. Getter i setter</h2>
  <p>Stron w pierwszej książce: <?= $pagesBefore ?></p>
  <p><?= htmlspecialchars($message) ?></p>
  <p>Po zmianie: <?= $pagesAfter ?></p>

  <h2>3. Tablica obiektów</h2>
  <p>Książek na półce: <?= $bookCount ?>, stron razem: <?= $totalPages ?></p>

  <h2>4. Destruktor</h2>
  <?php foreach ($warehouse->returned as $title): ?>
    <p>Książka wraca do magazynu: <?= htmlspecialchars($title) ?></p>
  <?php endforeach; ?>
</body>
</html>
