// Task 3 of 6: turn form texts into numbers with Number() and fix the line that glues.
// Expected:
//   Sklejone: 32
//   Biletów razem: 5
//   Typ: number
//   Do zapłaty: 125 zł
//   Z opiekunem: 6

const ticketsText = "3";
const extraText = "2";
const priceText = "25";

const glued = ticketsText + extraText;
console.log("Sklejone: " + glued);

// TU ZMIEŃ: zamiast 0 dodaj oba bilety jako liczby (użyj Number())
let tickets = 0;
console.log("Biletów razem: " + tickets);
console.log("Typ: " + typeof tickets);

// TU ZMIEŃ: zamiast 0 policz koszt: liczba biletów razy cena jednego biletu
let cost = 0;
console.log("Do zapłaty: " + cost + " zł");

// + works left to right: text + 5 gives text, then + 1 glues "1".
// TU ZMIEŃ: popraw tę linię tak, żeby najpierw dodała tickets + 1
console.log("Z opiekunem: " + tickets + 1);
