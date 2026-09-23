// Task 4 of 5: addProduct() and removeLast() on a shopping list with a counter.
// Expected after „jabłka”: chleb, mleko, jabłka and „Na liście: 3”.
// Expected after two „Usuń ostatni”: chleb and „Na liście: 1”.
// Expected for an empty field: „Wpisz nazwę produktu” in red.

const list = document.getElementById("shopping-list");
const field = document.getElementById("product");
const message = document.getElementById("message");

// A live collection: its length follows every added or removed product.
const products = document.getElementsByClassName("product");

function showCount() {
  document.getElementById("counter").textContent = "Na liście: " + products.length;
}

function addProduct() {
  const name = field.value;

  // TU ZMIEŃ: gdy name === "", wpisz do message "Wpisz nazwę produktu" i zakończ (return)

  // TU ZMIEŃ: wyczyść message, utwórz <li> z klasą "product" i tekstem name, dołącz do list

  // TU ZMIEŃ: wyczyść pole (field.value = "") i wywołaj showCount()
}

function removeLast() {
  // TU ZMIEŃ: gdy list.lastElementChild nie jest null, usuń go przez remove(), potem showCount()
}
