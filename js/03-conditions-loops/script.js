// Conditions and loops in a small cinema: tickets, days, seats, money.

// ---------- 1. if, else if, else ----------
console.log("--- 1. Bilet według wieku ---");

let age = 15;
let ticket;

if (age < 7) {
  ticket = "bezpłatny";
} else if (age < 18) {
  // age < 7 was false, so this means 7 to 17.
  ticket = "ulgowy";
} else {
  ticket = "normalny";
}
console.log("Wiek: " + age + ", bilet: " + ticket); // Wiek: 15, bilet: ulgowy

// ---------- 2. A compound condition ----------
console.log("--- 2. Warunek złożony ---");

let isStudent = true;
let dayNumber = 2;

// Without the brackets && would go first and the day check would break.
if (isStudent && (dayNumber === 2 || dayNumber === 3)) {
  console.log("Zniżka studencka działa"); // Zniżka studencka działa
} else {
  console.log("Dziś bez zniżki");
}

// ---------- 3. switch ----------
console.log("--- 3. switch ---");

let dayName;

// switch compares like ===, so 2 and "2" differ. Without break it runs into the next case.
switch (dayNumber) {
  case 1:
    dayName = "poniedziałek";
    break;
  case 2:
    dayName = "wtorek";
    break;
  case 3:
    dayName = "środa";
    break;
  default:
    dayName = "inny dzień";
}
console.log("Dzień " + dayNumber + " to " + dayName); // Dzień 2 to wtorek

// ---------- 4. The ? : operator ----------
console.log("--- 4. Operator ? : ---");

let seatsLeft = 3;

// condition ? valueIfTrue : valueIfFalse
let status = seatsLeft > 0 ? "są miejsca" : "brak miejsc";
console.log("Seans 18:00: " + status); // Seans 18:00: są miejsca

// ---------- 5. for ----------
console.log("--- 5. Pętla for ---");

for (let i = 1; i <= 5; i++) {
  console.log(`Miejsce ${i}`); // Miejsce 1 ... Miejsce 5
}

// ---------- 6. while ----------
console.log("--- 6. Pętla while ---");

let price = 32;
let savings = 0;
let weeks = 0;

// Forget the step inside the block and the loop never ends.
while (savings < price) {
  savings += 10;
  weeks++;
}
console.log(`Po ${weeks} tygodniach masz ${savings} zł`); // Po 4 tygodniach masz 40 zł

// ---------- 7. do...while, break, continue ----------
console.log("--- 7. do...while, break, continue ---");

let ticketsSold = 100;

// do...while runs at least once, even with a false condition.
do {
  console.log(`Sprzedane bilety: ${ticketsSold}`); // Sprzedane bilety: 100 (once)
  ticketsSold++;
} while (ticketsSold < 10);

// continue jumps to seat++, break leaves the whole loop.
for (let seat = 1; seat <= 10; seat++) {
  if (seat % 2 === 0) {
    continue;
  }
  if (seat > 7) {
    break;
  }
  console.log(`Wolne miejsce nieparzyste: ${seat}`); // 1, 3, 5, 7
}
console.log("Koniec"); // Koniec

// TU ZMIEŃ: zmień age na 5 i 30, a dayNumber na 3 i 6, i sprawdź, które gałęzie się wykonają
