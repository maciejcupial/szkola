// Task 4 of 5: loop over students, sum the grades, count grades equal to 1.
// Expected:
//   Anna: 5
//   Bartek: 3
//   Celina: 4
//   Darek: 1
//   Ewa: 2
//   Średnia klasy: 3
//   Zagrożonych: 1

const students = [
  { firstName: "Anna", grade: 5 },
  { firstName: "Bartek", grade: 3 },
  { firstName: "Celina", grade: 4 },
  { firstName: "Darek", grade: 1 },
  { firstName: "Ewa", grade: 2 }
];

let sum = 0;
let atRisk = 0;

for (const student of students) {
  // TU ZMIEŃ: wypisz imię i ocenę w formacie „Anna: 5”
  // TU ZMIEŃ: dodaj ocenę tego ucznia do sum
  // TU ZMIEŃ: jeśli ocena to 1, zwiększ atRisk o 1 (pamiętaj o ===)
}

const average = sum / students.length;
console.log("Średnia klasy: " + average);
console.log("Zagrożonych: " + atRisk);
