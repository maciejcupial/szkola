// Task 4 of 5: a button that loads the products, the list cleared on every click.
// Expected after two clicks on "Pokaż produkty" (fresh setup.sql):
//   the list shows three items (not six): Kubek - 19.90 zł, Długopis - 3.50 zł, Zeszyt - 7.20 zł
//   the page shows: Wczytano produktów: 3

const loadButton = document.getElementById("load");
const message = document.getElementById("message");
const list = document.getElementById("product-list");

async function loadProducts() {
  // TU ZMIEŃ: wyczyść listę (list.textContent = "") i wpisz do message „Wczytuję…”

  const response = await fetch("../api/products.php");

  // TU ZMIEŃ: jeśli !response.ok, wpisz do message „Nie udało się pobrać produktów.” i zakończ (return)

  const products = await response.json();

  // TU ZMIEŃ: w pętli for...of dołącz do list element "li" z tekstem „nazwa - cena zł”

  // TU ZMIEŃ: wpisz do message „Wczytano produktów: ” i liczbę produktów
}

// TU ZMIEŃ: podepnij loadProducts pod zdarzenie "click" przycisku loadButton
