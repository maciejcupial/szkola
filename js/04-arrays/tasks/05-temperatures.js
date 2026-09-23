// Task 5 of 6: for...of finds max and min, push() warm days, forEach() prints them.
// Expected:
//   Najcieplej: 21 stopni
//   Najzimniej: 9 stopni
//   Ciepłych dni (powyżej 15 stopni): 3
//   Ciepły dzień: 17 stopni
//   Ciepły dzień: 21 stopni
//   Ciepły dzień: 18 stopni

const temperatures = [12, 17, 9, 21, 15, 18, 11];

// Not 0: with only negative temperatures max would stay 0.
let max = temperatures[0];
let min = temperatures[0];

const warmDays = [];

// TU ZMIEŃ: for...of po temperatures, trzy if: > max, < min, > 15 (push do warmDays)

console.log("Najcieplej: " + max + " stopni");
console.log("Najzimniej: " + min + " stopni");
console.log("Ciepłych dni (powyżej 15 stopni): " + warmDays.length);

// TU ZMIEŃ: wypisz każdy element warmDays metodą forEach() w postaci "Ciepły dzień: 17 stopni"
