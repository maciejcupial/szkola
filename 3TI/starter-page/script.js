// script.js decides how the page BEHAVES: it reacts to what the user does.
// index.html loads this file at the very end of <body>, so every element already exists here.
// This file never changes the look of the page; colors and spacing belong to style.css.

// console.log writes a message to the browser console (press F12, tab Console).
// It changes nothing on the page, it is the simplest way to check that the file really runs.
console.log("Strona działa, skrypt też.");

// const creates a name for a value that will never point to something else.
// document.getElementById finds the element with that id in index.html.
const greetButton = document.getElementById("greet-button");
const greeting = document.getElementById("greeting");

// addEventListener says: when this event happens on this element, run this function.
// "click" is the event, and the function after it runs once per click.
greetButton.addEventListener("click", () => {
  // textContent sets the text inside an element; it inserts plain text, never HTML tags.
  // TU ZMIEŃ: powitanie, które pojawi się po kliknięciu
  greeting.textContent = "Cześć, tu Twoja pierwsza strona.";
});

// TU ZMIEŃ: własny kod, np. reakcja na kolejny przycisk
