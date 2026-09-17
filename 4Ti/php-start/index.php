<?php
// First PHP page of the course: one file that mixes PHP logic with HTML markup.
// PHP runs on the server (Apache + PHP from XAMPP). The server executes the code here,
// builds a finished HTML document out of the result and sends only that HTML to the browser.
// The visitor never receives this source, so "view source" in the browser shows no PHP at all.
// This folder has no other file: the whole page, data and layout live in index.php.

/* A PHP block opens with <?php and closes with ?>. Everything outside those markers is sent
   to the browser untouched, which is why the HTML below can be written normally.
   There are two ways to enter PHP inside the markup below: the short echo tag <?= value ?>
   prints one value straight into the HTML, while a full <?php ... ?> block holds logic such as
   loops and prints nothing by itself.
   Note the block comment style here: in a // comment the characters ?> would already close the
   PHP block, so the tags are explained inside a comment that does not treat them specially. */

// TU ZMIEŃ: wpisz swoje imię w cudzysłowie
// A variable name always starts with $ and holds a value until the script ends.
$name = "Uczeń";

// date() asks the server for the current date and formats it. The letter "Y" means
// the four digit year, so $year is a string like "2026" without typing it by hand.
$year = date("Y");

// TU ZMIEŃ: wstaw własne liczby oddzielone przecinkami
// Square brackets build an array: one variable that stores many values in order.
$numbers = [3, 7, 12];

// array_sum() adds every value of an array and returns one number.
$sum = array_sum($numbers);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <!-- UTF-8 lets Polish letters such as ą, ę and ż display correctly. -->
  <meta charset="UTF-8">
  <!-- Viewport tells a phone to use its real width instead of pretending to be a desktop. -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- TU ZMIEŃ: tytuł widoczny na karcie przeglądarki -->
  <title>Pierwszy skrypt PHP</title>
  <style>
    /* Simple page styling kept inline because this template has a single file. */
    body {
      font-family: Arial, Helvetica, sans-serif;
      max-width: 600px;
      margin: 40px auto;
      padding: 0 16px;
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <!-- htmlspecialchars() turns characters such as < > & " into harmless entities, so text
       typed by a person can never be read by the browser as HTML or as a script. Every value
       printed on a page goes through it. -->
  <h1>Cześć, <?= htmlspecialchars($name) ?>!</h1>

  <p>Mamy rok <?= htmlspecialchars($year) ?>.</p>

  <!-- implode() glues array values into one string using the separator given first. -->
  <p>
    Suma liczb <?= htmlspecialchars(implode(", ", $numbers)) ?> to
    <strong><?= htmlspecialchars($sum) ?></strong>.
  </p>

  <h2>Pętla</h2>
  <ul>
    <?php
        // foreach walks through the array and puts each value into $number, one pass per value.
        // Inside a template we use the alternative syntax: a colon opens the block and endforeach
        // closes it, which is easier to match by eye than braces split across separate PHP tags.
        foreach ($numbers as $number):
    ?>
      <li><?= htmlspecialchars($number) ?> do kwadratu = <?= htmlspecialchars($number * $number) ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
