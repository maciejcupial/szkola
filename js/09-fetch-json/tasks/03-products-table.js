// Task 3 of 5: products in a table and their total price.
// Expected (fresh setup.sql):
//   three table rows: Kubek | 19.90 zł, Długopis | 3.50 zł, Zeszyt | 7.20 zł
//   under the table: Razem: 30.60 zł

const rows = document.getElementById("product-rows");
const totalText = document.getElementById("total");

async function loadProducts() {
  const response = await fetch("../api/products.php");
  const products = await response.json();
  let total = 0;

  for (const product of products) {
    // TU ZMIEŃ: utwórz element "tr" i dwa elementy "td": nazwa oraz cena z dopiskiem „ zł”
    // TU ZMIEŃ: dołącz obie komórki do wiersza, a wiersz do rows

    // TU ZMIEŃ: dodaj cenę do total (price to tekst, zamień go przez parseFloat)
  }

  // 19.90 + 3.50 + 7.20 gives 30.599999999999998 in JavaScript, toFixed(2) rounds it to "30.60".
  // TU ZMIEŃ: wpisz do totalText „Razem: ” i total.toFixed(2) z dopiskiem „ zł”
}

loadProducts();
