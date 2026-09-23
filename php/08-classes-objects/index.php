<?php
// Classes and objects: a book shelf built from Book objects.
header("Content-Type: text/html; charset=UTF-8");
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
<?php
class Book {
    public $title;
    public $genre;

    private $pages = 0;

    // Differs from private only in child classes (extends).
    protected $shelf;

    public function __construct($title, $genre, $pages, $shelf = "A") {
        $this->title = $title;
        $this->genre = $genre;
        $this->shelf = $shelf;
        $this->setPages($pages);
    }

    public function getPages() {
        return $this->pages;
    }

    public function setPages($pages) {
        if ($pages < 1) {
            echo "Odmowa: liczba stron musi być większa od zera.<br>";
            return;
        }
        $this->pages = $pages;
    }

    public function showInfo() {
        $text = $this->title . " (" . $this->genre . "), stron: " . $this->pages
            . ", półka " . $this->shelf;
        echo htmlspecialchars($text) . "<br>";
    }

    public function __destruct() {
        echo "Książka wraca do magazynu: " . htmlspecialchars($this->title) . "<br>";
    }
}

echo "<h2>1. Obiekty z konstruktorem</h2>";
$book1 = new Book("Lalka", "powieść", 680);
$book2 = new Book("Quo vadis", "powieść historyczna", 520, "B");
$book1->showInfo();     // Lalka (powieść), stron: 680, półka A
$book2->showInfo();     // Quo vadis (powieść historyczna), stron: 520, półka B

$book1->title = "Lalka, wydanie szkolne";
$book1->showInfo();     // Lalka, wydanie szkolne (powieść), stron: 680, półka A

echo "<h2>2. Getter i setter</h2>";
echo "Stron w pierwszej książce: " . $book1->getPages() . "<br>";   // 680
$book1->setPages(-5);   // Odmowa: liczba stron musi być większa od zera.
$book1->setPages(700);
echo "Po zmianie: " . $book1->getPages() . "<br>";                // 700
// Fatal error: Cannot access private property Book::$pages
// echo $book1->pages;

echo "<h2>3. Tablica obiektów</h2>";
$books = [$book1, $book2, new Book("Pan Tadeusz", "epopeja", 340, "B")];
$totalPages = 0;
foreach ($books as $book) {
    $totalPages += $book->getPages();
}
echo "Książek na półce: " . count($books) . ", stron razem: " . $totalPages . "<br>";   // 3, 1560

echo "<h2>4. Destruktor</h2>";
// After the loop $book still points at „Pan Tadeusz”, so it must be unset too.
unset($books, $book, $book1, $book2);
// Pan Tadeusz, then Lalka, wydanie szkolne, then Quo vadis
?>
</body>
</html>
