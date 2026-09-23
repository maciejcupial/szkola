-- Lessons 18-22 (4Ti 20-24): database shop, as built on lesson 18 slide 5 and lesson 19 slide 3.
-- Import again to reset the data; expected output in the PHP files assumes a fresh import.

SET NAMES utf8mb4;

CREATE DATABASE IF NOT EXISTS shop CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci;

USE shop;

-- Dropping first makes a re-import reset the rows instead of doubling them.
DROP TABLE IF EXISTS products;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(8, 2) NOT NULL
);

-- Ids 1, 2 and 3 in this order.
INSERT INTO products (name, price) VALUES
    ('Kubek', 19.90),
    ('Długopis', 3.50),
    ('Zeszyt', 7.20);
