// Reads the number from the field, calculates, shows the result.

const input = document.getElementById("input");
const button = document.getElementById("button");
const result = document.getElementById("result");

// TU ZMIEŃ: to jedyne miejsce z obliczeniem. Dostajesz wartość z pola, zwracasz wynik.
function compute(value) {
  // input.value is always text: "21", not 21.
  const number = Number(value);
  return number * 2;
}

button.addEventListener("click", () => {
  result.textContent = "Wynik: " + compute(input.value);
});
