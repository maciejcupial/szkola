// Task 6 of 6 (optional): Collatz with do...while: even / 2, odd 3 * n + 1, until 1.
// Expected:
// 6 → 3 → 10 → 5 → 16 → 8 → 4 → 2 → 1
// Liczba kroków: 8
// Also: START = 1 gives "1 → 4 → 2 → 1" and 3 steps, START = 27 gives 111 steps.

const START = 6;
let number = START;

// "" + number makes a text, so += glues.
let path = "" + number;
let steps = 0;

// TU ZMIEŃ: do { ... } while (number !== 1); następna liczba, do path " → " i liczba, steps++

console.log(path);
console.log("Liczba kroków: " + steps);
