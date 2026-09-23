// Task 2 of 6: change a score with the assignment shortcuts, then ++ before and after.
// Expected:
//   Po premii: 70
//   Po karze: 65
//   Po podwojeniu: 130
//   Po podzieleniu przez 10: 13
//   Po ++: 14
//   Stara wartość: 7
//   Nowa wartość: 9
//   visits na końcu: 9

let points = 50;

// TU ZMIEŃ: nad każdym console.log dopisz jedną linię ze skrótem (+=, -=, *=, /= albo ++)
// Bonus: +20
console.log("Po premii: " + points);
// Penalty: -5
console.log("Po karze: " + points);
// Double
console.log("Po podwojeniu: " + points);
// Divide by 10
console.log("Po podzieleniu przez 10: " + points);
// One more point
console.log("Po ++: " + points);

let visits = 7;
// TU ZMIEŃ: dopisz ++ przed albo za visits, tak żeby before dostało 7, a after dostało 9
let before = visits;
let after = visits;
console.log("Stara wartość: " + before);
console.log("Nowa wartość: " + after);
console.log("visits na końcu: " + visits);
