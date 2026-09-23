// Task 4 of 6: a quiz result checked with comparison operators.
// Expected:
//   Procent: 74
//   Zaliczone: true
//   Komplet punktów: false
//   Kod ==: true
//   Kod ===: false
//   Kod po Number(): true

const points = 37;
const maxPoints = 50;
const passMark = 50;

// TU ZMIEŃ: zamiast 0 policz procent: punkty podzielone przez maksimum, razy 100
let percent = 0;
console.log("Procent: " + percent);

// TU ZMIEŃ: zamiast false porównaj percent z passMark (zalicza się od 50 procent włącznie)
let passed = false;
console.log("Zaliczone: " + passed);

// TU ZMIEŃ: zamiast true sprawdź, czy points jest dokładnie równe maxPoints (użyj ===)
let isPerfect = true;
console.log("Komplet punktów: " + isPerfect);

const typedCode = "1234";
const savedCode = 1234;

// TU ZMIEŃ: porównaj typedCode z savedCode przez ==, przez === i przez === po Number()
let looseMatch = false;
let strictMatch = false;
let strictAfterNumber = false;
console.log("Kod ==: " + looseMatch);
console.log("Kod ===: " + strictMatch);
console.log("Kod po Number(): " + strictAfterNumber);
