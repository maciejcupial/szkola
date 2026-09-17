// Six numbered DOM examples for the page in index.html: find, change text, change look,
// swap an attribute, create an element, remove an element.
// The file is loaded at the end of the body, so every element below already exists.
// Styling lives in style.css, this file only decides what changes and when.

// 1. Find the elements once and keep them in constants.
// const is a name that cannot be pointed at another value later, which is what we want here.
// getElementById looks through the whole document for the element with that exact id
// and gives back null when nothing matches, so a typo in the id breaks every line that follows.
const heading = document.getElementById("heading");
const description = document.getElementById("description");
const picture = document.getElementById("picture");
const list = document.getElementById("list");

// 2. Change the text of an element.
// addEventListener says: when this element gets a "click", run this function.
// textContent replaces the text inside the element and treats everything as plain text,
// so nothing a user types can turn into HTML tags.
document.getElementById("change-text").addEventListener("click", () => {
  // TU ZMIEŃ: teksty, które pojawią się po kliknięciu
  heading.textContent = "Tekst zmieniony!";
  description.textContent = "Zmieniła go funkcja podpięta pod przycisk.";
});

// 3. Change the look in two ways: through a CSS class and through an inline style.
// classList.toggle adds the class when the element does not have it and removes it when it does,
// so one button switches the look on and off.
// Prefer the class: the colours stay in style.css, where a designer can change them, and one class
// can set many properties at once. An inline style set here beats the stylesheet and is easy to
// forget about, so use it only for a value that is calculated while the page runs.
document.getElementById("change-style").addEventListener("click", () => {
  description.classList.toggle("highlight");
  // The inline style is shown here only to compare it with the class above.
  heading.style.color = heading.style.color === "crimson" ? "" : "crimson";
});

// 4. Swap an attribute: the src of the picture points at another local file.
// picture.src read in JavaScript gives the full address of the file, while getAttribute gives back
// exactly the text written in the HTML, which is the short name we compare here.
document.getElementById("swap-image").addEventListener("click", () => {
  // === compares value and type without converting anything, so it is the only comparison to use.
  const showingA = picture.getAttribute("src") === "image-a.svg";
  // TU ZMIEŃ: własne pliki z obrazkami (muszą leżeć w tym samym folderze)
  picture.src = showingA ? "image-b.svg" : "image-a.svg";
  // alt is the description read by a screen reader and shown when the picture fails to load,
  // so it has to change together with the picture.
  picture.alt = showingA ? "Obrazek B" : "Obrazek A";
});

// 5. Create a new element: build it, fill it, then attach it to a parent.
// createElement makes an element that exists only in memory, nobody sees it yet.
// appendChild puts it inside the chosen parent as its last child, and that is the moment
// it appears on the page. Attach it to the wrong parent and it shows up in the wrong place.
document.getElementById("add-item").addEventListener("click", () => {
  const item = document.createElement("li");
  // children is the list of elements inside <ul>, so its length is the number of items.
  item.textContent = "element nr " + (list.children.length + 1);
  list.appendChild(item);
});

// 6. Remove the last element of the list.
// lastElementChild is the last element inside the parent, or null when the list is empty.
// remove() takes the element out of the document together with everything inside it.
document.getElementById("remove-item").addEventListener("click", () => {
  const lastItem = list.lastElementChild;
  // The check protects the empty list: calling remove() on null would stop the script.
  if (lastItem !== null) {
    lastItem.remove();
  }
});

// TU ZMIEŃ: dopisz własny przycisk w index.html i obsłuż go tutaj według wzoru powyżej
