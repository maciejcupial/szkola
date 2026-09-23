// PHP as a JSON API: fetch the products and build the list with createElement. Lesson 31.
// Open through the server (http://localhost/...), not by double-clicking: fetch needs PHP to run.

const list = document.getElementById("product-list");
const message = document.getElementById("message");

// async lets the function wait (await) for the server without freezing the page.
async function loadProducts() {
  const response = await fetch("api/products.php");
  if (!response.ok) {
    message.textContent = "Nie udało się pobrać produktów.";
    message.setAttribute("class", "error");
    return;
  }
  // json() turns the JSON text into an array of objects.
  const products = await response.json();

  for (const product of products) {
    const item = document.createElement("li");
    // textContent, not innerHTML: a name like "<b>Promocja</b>" stays plain text.
    item.textContent = `${product.name} - ${product.price} zł`;
    list.appendChild(item);
  }
  message.textContent = `Produktów w sklepie: ${products.length}`;
}

loadProducts();

// TU ZMIEŃ: dopisz pod listą łączną wartość produktów (price to tekst, zamień go przez parseFloat)
