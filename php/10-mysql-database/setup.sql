-- Database shop_tasks for the tasks. Import in phpMyAdmin (tab SQL).
-- Import again to reset the data; task results assume a fresh import.

SET NAMES utf8mb4;

CREATE DATABASE IF NOT EXISTS shop_tasks CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;

USE shop_tasks;

-- Dropping first makes a re-import reset the rows instead of doubling them.
DROP TABLE IF EXISTS products;

CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  -- DECIMAL, not FLOAT: a float would store 19.90 as 19.899999...
  price DECIMAL(8, 2) NOT NULL
);

-- They get ids 1 to 5 in this order; the tasks count on that.
INSERT INTO products (name, price) VALUES
  ('Kubek', 19.90),
  ('Długopis', 3.50),
  ('Zeszyt', 7.20),
  ('Plecak', 89.00),
  ('Linijka', 2.40);
