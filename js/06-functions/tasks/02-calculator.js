// Task 2 of 5: finish subtract(), multiply() and divide() like add().
// Expected for 8 and 2:
//   Suma: 10
//   Różnica: 6
//   Iloczyn: 16
//   Iloraz: 4
// Expected for 7 and 0 on "Podziel": Nie dzielimy przez zero

function add() {
  const number1 = parseFloat(document.getElementById("number1").value);
  const number2 = parseFloat(document.getElementById("number2").value);
  console.log("Suma: " + (number1 + number2));
}

function subtract() {
  // TU ZMIEŃ: odczytaj oba pola tak jak w add() i zamiast 0 policz różnicę: pierwsza minus druga
  const result = 0;
  console.log("Różnica: " + result);
}

function multiply() {
  // TU ZMIEŃ: odczytaj oba pola i zamiast 0 policz iloczyn
  const result = 0;
  console.log("Iloczyn: " + result);
}

function divide() {
  // TU ZMIEŃ: gdy druga liczba to 0, wypisz „Nie dzielimy przez zero”, inaczej „Iloraz: ” i wynik
  const result = 0;
  console.log("Iloraz: " + result);
}
