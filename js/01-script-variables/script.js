// External script of index.html, runs after the internal <script>.

console.log("2. Plik zewnętrzny script.js"); // 2. Plik zewnętrzny script.js

// ---- First instructions: create, increase, print ----

var x = 10;
x++;
console.log(x); // 11

// ---- let: the modern way to create a variable ----

let myDog;
myDog = "Rover";
console.log(myDog); // Rover

let studentName = "Ola";
let studentAge = 17;
console.log(studentName + " ma " + studentAge + " lat"); // Ola ma 17 lat

// ---- var and let, difference one: declaring the same name again ----

var myName = "Chris";
var myName = "Bob";
console.log(myName); // Bob

// SyntaxError: Identifier 'studentAge' has already been declared
// let studentAge = 18;

studentAge = 18;
console.log(studentAge); // 18

// ---- var and let, difference two: the block { } ----

{
  var a = 1;
  let b = 2;
  console.log(a + " i " + b); // 1 i 2
}
console.log(a); // 1
// ReferenceError: b is not defined
// console.log(b);

// ---- const: a box sealed with tape ----

const PI = 3.14;
console.log(PI); // 3.14
// TypeError: Assignment to constant variable.
// PI = 3.14159;

// ---- Five basic types and typeof ----

let isPresent = true;
let homework;
let favouriteGame = null;
console.log(typeof studentAge); // number
console.log(typeof studentName); // string
console.log(typeof isPresent); // boolean
console.log(typeof homework); // undefined
// A known quirk of the language: typeof null is "object".
console.log(typeof favouriteGame); // object

// ---- The type depends on the value, not on the variable ----

let myNumber = "500";
console.log(typeof myNumber); // string
myNumber = 500;
console.log(typeof myNumber); // number

// ---- When a text meets a number ----

console.log("5" + 3); // 53
console.log("5" - 3); // 2
console.log("pies" - 3); // NaN

// ---- Template literal: a text with holes for values ----

console.log(`${studentName} ma ${studentAge} lat`); // Ola ma 18 lat

// TU ZMIEŃ: dopisz własną stałą i zmienną, wypisz je jednym console.log i sprawdź ich typeof
