// Task 2 of 6: name the day with switch and tell a weekend with ? :.
// Expected: Dzień 6: sobota, weekend
// Also: 3 gives "Dzień 3: środa, dzień szkolny", 9 gives "Dzień 9: nieznany dzień, dzień szkolny".

let dayNumber = 6;
let dayName = "nieznany dzień";
let dayKind = "?";

// case 6 matches, case "6" would not (switch compares like ===).

// TU ZMIEŃ: switch (dayNumber) z case od 1 do 7 i gałęzią default

// TU ZMIEŃ: dayKind = warunek ? "weekend" : "dzień szkolny";

console.log("Dzień " + dayNumber + ": " + dayName + ", " + dayKind);
