<?php
// The only file that knows how to reach the database. Every page starts with require "config.php"
// and from that moment can use the ready $pdo object, so the login details are written down once.
// This file prints nothing: the page layout lives in header.php and footer.php.

// TU ZMIEŃ: dane logowania do bazy, jeśli twój MySQL ma inne niż domyślne.
// W XAMPP baza stoi na localhost, użytkownik nazywa się root i nie ma hasła,
// dlatego $password jest pustym tekstem. Na prawdziwym serwerze zawsze wpisujesz hasło.
$host = "localhost";
$database = "school_crud";
$user = "root";
$password = "";

// try means: run this and, if it throws an error, jump to catch instead of killing the page.
try {
    // The first argument is the DSN (Data Source Name): one text that says which driver to use
    // (mysql), on which machine the server runs (host), which database to open (dbname) and in
    // which encoding to talk to it (charset=utf8mb4). Without that charset Polish letters that
    // travel between PHP and MySQL come back as question marks.
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8mb4", $user, $password, [
        // ERRMODE_EXCEPTION: a failed query throws an exception you can see, instead of quietly
        // returning false and letting the next line work on nothing.
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // FETCH_ASSOC: rows arrive as arrays keyed by column name, so you write $post["title"]
        // and never the numbered $post[0], which stops meaning anything once the query changes.
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    // exit stops the script right here, because no page makes sense without the database.
    exit("Nie udało się połączyć z bazą: " . htmlspecialchars($e->getMessage()));
}
