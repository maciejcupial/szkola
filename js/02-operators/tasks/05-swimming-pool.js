// Task 5 of 6: pool entry rules as conditions with &&, || and !.
// Expected:
//   Dorosły: false
//   Basen otwarty: true
//   Wejście do głębokiego basenu: true
//   Wejście bez opiekuna: false

let age = 15;
let hasTicket = true;
let withGuardian = true;
let isClosed = false;

// TU ZMIEŃ: zamiast false sprawdź, czy age to co najmniej 18
let isAdult = false;
console.log("Dorosły: " + isAdult);

// TU ZMIEŃ: zamiast false odwróć isClosed operatorem !
let isOpen = false;
console.log("Basen otwarty: " + isOpen);

// open AND ticket AND (adult OR guardian): && goes before || without brackets.
// TU ZMIEŃ: zamiast false zapisz tę regułę, użyj isOpen, hasTicket, isAdult i withGuardian
let canEnter = false;
console.log("Wejście do głębokiego basenu: " + canEnter);

withGuardian = false;
// TU ZMIEŃ: przepisz tę samą regułę jeszcze raz (tym razem wynik ma być false)
canEnter = true;
console.log("Wejście bez opiekuna: " + canEnter);
