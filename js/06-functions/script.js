// Functions: own functions, buttons, local variables, parseFloat, Math. Lessons 16-19.
// Part 2 prints only after a button click.

// ---- 1. Your own function: definition, parameters, return ----

// No $ before parameters, unlike PHP.
function squareArea(side) {
  return side * side;
}

console.log(squareArea(5)); // 25

function multiply(a, b) {
  return a * b;
}

console.log(multiply(3, 4)); // 12
console.log(multiply(5, 6)); // 30
console.log(multiply(7, 2)); // 14

const doubleArea = squareArea(3) * 2;
console.log(doubleArea); // 18

function multiplyNoReturn(a, b) {
  const result = a * b;
}

console.log(multiplyNoReturn(3, 4)); // undefined

// Without () this prints the function's code.
// console.log(multiply);

// ---- 2. A function called by a button ----

// Called by onclick="add()" in index.html.
function add() {
  // Without parseFloat "3" + "4" gives "34".
  const number1 = parseFloat(document.getElementById("number1").value);
  const number2 = parseFloat(document.getElementById("number2").value);
  const total = number1 + number2;
  // Empty fields give NaN.
  console.log(total);
}

function absoluteValue(number) {
  if (number < 0) {
    number = number * -1;
  }
  return number;
}

console.log(absoluteValue(-3)); // 3

// For 4.6 prints 5 and 25.
function calculate() {
  const value = parseFloat(document.getElementById("inputValue").value);
  const rounded = Math.round(value);
  // Same as rounded * rounded.
  const power = Math.pow(rounded, 2);
  console.log("zaokrąglona:", rounded);
  console.log("do kwadratu:", power);
}

// ---- 3. What a function sees: local variables ----

function fun1(a) {
  for (let i = 1; i < 6; i++) {
    console.log(i * a);
  }
}

fun1(2); // 2, 4, 6, 8, 10

// typeof on an unknown name gives "undefined" instead of an error.
console.log(typeof i); // undefined
// ReferenceError: i is not defined
// console.log(i);

function showMessage() {
  let total = 5;
  console.log(total);
}

function countGuests() {
  let total = 100;
  console.log(total);
}

showMessage(); // 5
countGuests(); // 100

const vatRate = 0.23;

function grossPrice(netPrice) {
  return netPrice + netPrice * vatRate;
}

console.log(grossPrice(100)); // 123

// Without let, n becomes global and stays after the function ends.
function countNoLet() {
  for (n = 1; n < 4; n++) {
    console.log(n);
  }
}

countNoLet(); // 1, 2, 3
console.log(n); // 4

// ---- 4. parseFloat: text to number ----

console.log(parseFloat("12abc")); // 12
console.log(parseFloat("4.5 kg")); // 4.5
console.log(parseFloat("abc")); // NaN
// A comma is not a decimal sign: parseFloat stops at it.
console.log(parseFloat("4,5")); // 4

// ---- 5. Math: ready-made functions for numbers ----

console.log(Math.max(4, 9.4, -3.5)); // 9.4
console.log(Math.min(4, 9.4, -3.5)); // -3.5
console.log(Math.round(9.4)); // 9
console.log(Math.pow(2, 10)); // 1024
// A half always rounds up, also below zero.
console.log(Math.round(2.5)); // 3
console.log(Math.round(-2.5)); // -2

function higherScore(first, second) {
  return Math.max(first, second);
}

console.log(higherScore(17, 23)); // 23

// TU ZMIEŃ: napisz własną funkcję z parametrem i return, wywołaj ją dwa razy i wypisz oba wyniki
