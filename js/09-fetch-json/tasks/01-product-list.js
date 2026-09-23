// Task 1 of 5: products from ../api/products.php as a list on the page.
// Expected (fresh setup.sql):
//   the list shows three items: Kubek - 19.90 zł, Długopis - 3.50 zł, Zeszyt - 7.20 zł
//   under the list: Produktów: 3

const list = document.getElementById("product-list");
const countText = document.getElementById("product-count");

async function loadProducts() {
  // TU ZMIEŃ: pobierz dane przez await fetch("../api/products.php")
  // TU ZMIEŃ: zamień odpowiedź na tablicę produktów przez await response.json()

  // TU ZMIEŃ: w pętli for...of utwórz dla każdego produktu element "li" z tekstem „nazwa - cena zł”
  // i dołącz go do list

  // TU ZMIEŃ: wpisz do countText „Produktów: ” i liczbę produktów (length)
}

loadProducts();
