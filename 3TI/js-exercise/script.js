// Behaviour of the page in index.html: read the number from the field, calculate, show the result.
// It runs because index.html loads this file with <script src="script.js"> at the end of body.
// The three ids below ("input", "button", "result") must match the ids in index.html.

// const creates a name that cannot be pointed at another value later.
// document.getElementById finds one element by its id attribute.
const input = document.getElementById("input");
const button = document.getElementById("button");
const result = document.getElementById("result");

// TU ZMIEŃ: to jedyne miejsce z obliczeniem. Dostajesz wartość z pola, zwracasz wynik.
function compute(value) {
  // input.value is always text, even in a number field: "21" is a string, not a number.
  // Number() converts that text into a real number, so * works instead of joining texts.
  const number = Number(value);
  return number * 2;
}

// addEventListener("click", ...) tells the browser: when this button is clicked, run this function.
button.addEventListener("click", () => {
  // textContent writes plain text into the element. It never treats the value as HTML,
  // so whatever the user typed cannot turn into tags on the page.
  result.textContent = "Wynik: " + compute(input.value);
});
