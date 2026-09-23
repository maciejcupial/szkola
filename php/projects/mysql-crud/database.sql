-- Database, posts table and two example rows. Run once in phpMyAdmin.

-- utf8mb4_polish_ci sorts Polish letters correctly
CREATE DATABASE IF NOT EXISTS school_crud CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;

USE school_crud;

-- TU ZMIEŃ: własne kolumny, np. author VARCHAR(80); popraw też add.php, edit.php i list.php.
CREATE TABLE IF NOT EXISTS posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(120) NOT NULL,
  body TEXT NOT NULL,
  -- Filled in by MySQL on INSERT
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO posts (title, body) VALUES
  ('Pierwszy wpis', 'To jest przykładowa treść. Możesz ją zmienić albo usunąć.'),
  ('Drugi wpis', 'Drugi przykładowy wpis do testów.');
