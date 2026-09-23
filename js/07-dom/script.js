// DOM: find elements, change text, look and attributes, create and remove. Lessons 20-25.
// Top-level code runs on load, the functions run on button clicks.

// ---- 1. The DOM and the document object ----

console.log(document.title); // JavaScript: DOM

// ---- 2. Finding elements ----

// Small "d" at the end: getElementById. Returns null when there is no such id.
const heading = document.getElementById("title");
console.log(heading.tagName); // H1

// A live collection: its length changes when .item elements come and go.
const items = document.getElementsByClassName("item");
console.log(items.length); // 3
// items.tagName is undefined: pick one element first.
console.log(items[0].tagName); // P

// querySelector takes any CSS selector and returns the first match.
console.log(document.querySelector("#title") === heading); // true

// ---- 3. Writing into an element as soon as the page loads ----

const count = document.getElementById("count");
count.textContent = "Elementów z klasą item: " + items.length; // Elementów z klasą item: 3

for (let i = 0; i < items.length; i++) {
  items[i].textContent = i + 1 + ". " + items[i].textContent; // 1. Pierwszy element, ...
}

// ---- 4. Changing text and look after a click ----

function changeText() {
  const paragraph = document.getElementById("info");
  // innerHTML turns text into tags: never use it for text typed by a user.
  paragraph.innerHTML = "Nowy <strong>tekst</strong>";
}

// font-size in CSS is fontSize in JavaScript.
function paintRed() {
  const paragraph = document.getElementById("info");
  paragraph.style.color = "red";
  paragraph.style.fontSize = "20px";
}

// ---- 5. Reading and changing attributes ----

function swapImage() {
  const picture = document.getElementById("photo");
  if (picture.getAttribute("src") === "image-a.svg") {
    picture.setAttribute("src", "image-b.svg");
    picture.setAttribute("alt", "Obrazek B");
  } else {
    picture.setAttribute("src", "image-a.svg");
    picture.setAttribute("alt", "Obrazek A");
  }
}

// setAttribute("class", ...) replaces all classes; classList.add keeps the others.
function markInfo() {
  const paragraph = document.getElementById("info");
  paragraph.setAttribute("class", "highlight");
}

// ---- 6. Creating and removing elements ----

// The new element is invisible until appendChild.
function addItem() {
  const list = document.getElementById("tasks");
  const newItem = document.createElement("li");
  newItem.textContent = "Nowe zadanie";
  list.appendChild(newItem);
}

// null.remove() would throw an error, hence the if.
function removeLast() {
  const list = document.getElementById("tasks");
  if (list.lastElementChild !== null) {
    list.lastElementChild.remove();
  }
}

// TU ZMIEŃ: dopisz w index.html własny przycisk z onclick i napisz tu funkcję, którą on wywoła
