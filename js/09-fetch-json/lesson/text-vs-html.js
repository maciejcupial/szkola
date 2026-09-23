// Lesson 31 (4Ti 90), slide 8: a product name that someone typed with HTML tags in it.

const product = { name: "<b>Promocja</b>", price: "1.00" };

const textItem = document.createElement("li");
textItem.textContent = `${product.name} - ${product.price} zł`;
document.getElementById("text-list").appendChild(textItem);
// <b>Promocja</b> - 1.00 zł   (the tags are shown as plain text)

const htmlItem = document.createElement("li");
htmlItem.innerHTML = `${product.name} - ${product.price} zł`;
document.getElementById("html-list").appendChild(htmlItem);
// Promocja - 1.00 zł   (the browser made "Promocja" bold: it read the tags as HTML)
