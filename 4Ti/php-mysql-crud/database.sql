-- Database setup for this folder. Paste the whole file into phpMyAdmin, tab SQL, and run it once.
-- It creates the database, the posts table that list.php, add.php, edit.php and delete.php use,
-- and two example rows, so the list already shows something on the first run.
-- The PHP files never create tables; they only read and write rows that exist here.

-- utf8mb4 stores every Polish letter, and the utf8mb4_polish_ci collation is the rule set that
-- sorts and compares them the Polish way: a, ą, b, c, ć ... instead of pushing ą, ę, ż to the end.
-- The ci at the end means case insensitive, so "Wpis" and "wpis" count as the same text.
CREATE DATABASE IF NOT EXISTS school_crud CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;

-- USE picks the database that the statements below work on.
USE school_crud;

-- TU ZMIEŃ: własne kolumny, na przykład author VARCHAR(80).
-- Po każdej zmianie popraw pola w add.php i edit.php oraz kolumny tabeli w list.php.
CREATE TABLE IF NOT EXISTS posts (
  -- AUTO_INCREMENT makes MySQL hand out the next free number by itself,
  -- PRIMARY KEY guarantees that number is unique and is how the other pages find one row.
  id INT AUTO_INCREMENT PRIMARY KEY,
  -- VARCHAR(120) is short text with a length limit, NOT NULL means the column cannot stay empty.
  title VARCHAR(120) NOT NULL,
  -- TEXT is long text, used where a VARCHAR limit would be too small.
  body TEXT NOT NULL,
  -- DEFAULT CURRENT_TIMESTAMP tells MySQL to write the current date and time while inserting,
  -- which is why the INSERT below lists only title and body.
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Two starter rows. Delete them in the application once you have your own.
INSERT INTO posts (title, body) VALUES
  ('Pierwszy wpis', 'To jest przykładowa treść. Możesz ją zmienić albo usunąć.'),
  ('Drugi wpis', 'Drugi przykładowy wpis do testów.');
