// Task 2 of 5: ready, do not change. It shows what 02-cheap-products.php sends.
// Expected after your PHP is done (fresh setup.sql):
//   the list shows two items: Długopis - 3.50 zł, Zeszyt - 7.20 zł
//   under the list: Tanich produktów: 2

const list = document.getElementById("product-list");
const countText = document.getElementById("product-count");

async function loadProducts() {
  const response = await fetch("02-cheap-products.php");
  const products = await response.json();

  for (const product of products) {
    const item = document.createElement("li");
    item.textContent = `${product.name} - ${product.price} zł`;
    list.appendChild(item);
  }
  countText.textContent = `Tanich produktów: ${products.length}`;
}

loadProducts();
