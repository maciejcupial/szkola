// Six DOM examples for index.html: find, text, look, attribute, create, remove.

// 1. Find the elements once. getElementById returns null on a typo in the id.
const heading = document.getElementById("heading");
const description = document.getElementById("description");
const picture = document.getElementById("picture");
const list = document.getElementById("list");

// 2. Change the text.
document.getElementById("change-text").addEventListener("click", () => {
  // TU ZMIEŃ: teksty, które pojawią się po kliknięciu
  heading.textContent = "Tekst zmieniony!";
  description.textContent = "Zmieniła go funkcja podpięta pod przycisk.";
});

// 3. Change the look: a CSS class (preferred) vs an inline style.
document.getElementById("change-style").addEventListener("click", () => {
  description.classList.toggle("highlight");
  heading.style.color = heading.style.color === "crimson" ? "" : "crimson";
});

// 4. Swap an attribute.
document.getElementById("swap-image").addEventListener("click", () => {
  // getAttribute gives the text from the HTML; picture.src gives the full address.
  const showingA = picture.getAttribute("src") === "image-a.svg";
  // TU ZMIEŃ: własne pliki z obrazkami (muszą leżeć w tym samym folderze)
  picture.src = showingA ? "image-b.svg" : "image-a.svg";
  picture.alt = showingA ? "Obrazek B" : "Obrazek A";
});

// 5. Create an element. It shows up only after appendChild.
document.getElementById("add-item").addEventListener("click", () => {
  const item = document.createElement("li");
  item.textContent = "element nr " + (list.children.length + 1);
  list.appendChild(item);
});

// 6. Remove the last element.
document.getElementById("remove-item").addEventListener("click", () => {
  const lastItem = list.lastElementChild;
  // Empty list: lastItem is null and remove() would crash.
  if (lastItem !== null) {
    lastItem.remove();
  }
});

// TU ZMIEŃ: dopisz własny przycisk w index.html i obsłuż go tutaj według wzoru powyżej
