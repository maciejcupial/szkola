// Lesson 31 (4Ti 90), slides 6-7: fetch the JSON from PHP and build the list.
// Expected on the page (fresh setup.sql): Kubek - 19.90 zł, Długopis - 3.50 zł, Zeszyt - 7.20 zł

const list = document.getElementById("product-list");

async function loadProducts() {
  const response = await fetch("api/products.php");
  const products = await response.json();
  console.log(products); // (3) [{…}, {…}, {…}]

  for (const product of products) {
    const item = document.createElement("li");
    item.textContent = product.name + " - " + product.price + " zł";
    list.appendChild(item);
  }
}

loadProducts();
