// Events: click, the event object, submit, keydown, load. Lessons 26-27.
// Pattern: find the element, write a function, attach it to an event.

// ---- Finding the elements ----

const button = document.getElementById("action");
const info = document.getElementById("info");
const form = document.getElementById("signup");
const nameField = document.getElementById("nameField");
const formMessage = document.getElementById("form-message");
const keyCountText = document.getElementById("key-count");
const loadInfo = document.getElementById("load-info");

// ---- 1. The click event and the event object ----

let clickCount = 0;

// The browser calls it and passes the event object.
function handleClick(event) {
  clickCount = clickCount + 1;
  info.textContent = `Kliknięto ${clickCount} razy.`;
  // event.target = the element the event happened on.
  event.target.textContent = "Kliknij jeszcze raz";
  console.log(event.target); // <button type="button" id="action">
}

// No (): handleClick() would run now and attach undefined.
button.addEventListener("click", handleClick);

// A second listener on the same element: both run on every click.
function logClick() {
  console.log("Drugi nasłuch też zadziałał");
}
button.addEventListener("click", logClick);

// ---- 2. The submit event and preventDefault() ----

// submit fires on the form, not on the button.
function handleSubmit(event) {
  if (nameField.value === "") {
    // Stops sending the form and reloading the page.
    event.preventDefault();
    formMessage.textContent = "Wpisz imię, zanim wyślesz.";
    formMessage.setAttribute("class", "error");
  }
  // A filled field is sent and the page reloads.
}

form.addEventListener("submit", handleSubmit);

// ---- 3. The keydown event ----

let keyCount = 0;

function handleKeydown(event) {
  keyCount = keyCount + 1;
  keyCountText.textContent = `Naciśnięcia klawiszy: ${keyCount}`;
  console.log(event.key); // "a", "Enter", ...
}

nameField.addEventListener("keydown", handleKeydown);

// ---- 4. The load event ----

// Fires on window when the page and all images are loaded.
function handleLoad() {
  loadInfo.textContent = "Strona wczytana, możesz klikać.";
}

window.addEventListener("load", handleLoad);

// TU ZMIEŃ: dodaj drugi przycisk w index.html i podepnij do niego własną funkcję obsługi kliknięcia
