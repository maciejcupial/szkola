// Operators: arithmetic, shortcuts, ++ and --, comparisons, logic.

// ---- Five arithmetic operators on the same two numbers ----

let a = 17;
let b = 5;
console.log(a + b); // 22
console.log(a - b); // 12
console.log(a * b); // 85
console.log(a / b); // 3.4
// % is the remainder: 17 = 3 * 5 + 2
console.log(a % b); // 2
console.log(2 + 3 * 4); // 14
console.log((2 + 3) * 4); // 20

// ---- The + sign has two jobs ----

console.log(5 + 3); // 8
console.log("5" + 3); // 53
let myNumber = "74";
myNumber += 3;
console.log(myNumber); // 743
console.log(typeof myNumber); // string
let fromForm = "74";
console.log(Number(fromForm) + 3); // 77
// Other operators always calculate.
console.log("5" - 3); // 2
console.log("5" * 3); // 15

// ---- Assignment shortcuts: calculate and store back in the same variable ----

let x = 10;
x += 4;
console.log(x); // 14
x -= 3;
console.log(x); // 11
x *= 3;
console.log(x); // 33
x /= 5;
console.log(x); // 6.6

// ---- ++ and --: add or take away 1 ----

let num1 = 4;
// num1++ gives the OLD value, then increases.
console.log(num1++); // 4
console.log(num1); // 5
// ++num1 increases, then gives the NEW value.
console.log(++num1); // 6
let counter = 0;
counter += 10;
counter--;
console.log(counter); // 9

// ---- Money: count in grosze, as whole numbers ----

console.log(0.1 + 0.2); // 0.30000000000000004
console.log(10 + 20); // 30

// ---- Comparisons: the answer is always true or false ----

// == changes the type before comparing.
console.log(5 == "5"); // true
// === compares the value AND the type.
console.log(5 === "5"); // false
console.log(5 != "5"); // false
console.log(5 !== "5"); // true
console.log(10 < 6); // false
console.log(10 > 20); // false
console.log(3 <= 2); // false
console.log(5 >= 4); // true
let isAdult = 20 >= 18;
console.log(isAdult); // true
console.log(typeof isAdult); // boolean

// ---- Logical operators: && (and), || (or), ! (not) ----

console.log(true && true); // true
console.log(true && false); // false
console.log(false || true); // true
console.log(false || false); // false
console.log(!true); // false
console.log(!false); // true

// ---- A compound condition: comparisons joined with a logical operator ----

let age = 20;
let hasIdCard = true;
console.log(age >= 18 && hasIdCard); // true
age = 16;
console.log(age >= 18 && hasIdCard); // false

// ---- The trap: one = is not a comparison ----

let p = 5;
let q = 3;
console.log(p === q); // false
// Prints 3, not false, and p is now 3.
// console.log(p = q);

// TU ZMIEŃ: dwie własne liczby: suma, reszta z dzielenia i czy suma > 10 oraz parzysta
