// Task 2 of 6: a queue: push(), unshift(), shift() and pop().
// Expected:
//   (5) ['Nauczycielka', 'Ola', 'Kuba', 'Zosia', 'Tomek']
//   Obsłużona osoba: Nauczycielka
//   Rezygnuje z kolejki: Tomek
//   (3) ['Ola', 'Kuba', 'Zosia']
//   Teraz obsługiwana: Ola
//   W kolejce zostało: 3

const queue = ["Ola", "Kuba"];

// TU ZMIEŃ: dopisz na koniec kolejki Zosię, a potem Tomka (dwa razy push)

// TU ZMIEŃ: dopisz na sam początek "Nauczycielka"

console.log(queue);

// TU ZMIEŃ: zamiast "" wywołaj shift() na kolejce
const served = "";
console.log("Obsłużona osoba: " + served);

// TU ZMIEŃ: zamiast "" wywołaj pop() na kolejce
const leaving = "";
console.log("Rezygnuje z kolejki: " + leaving);

console.log(queue);
console.log("Teraz obsługiwana: " + queue[0]);
console.log("W kolejce zostało: " + queue.length);
