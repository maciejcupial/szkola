// Task 3 of 5: add let where variables leak out of the function.
// Expected:
//   Grupa 1: średnia 5
//   Grupa 2: średnia 2.5
//   Grupa 3: średnia 4.5
//   Liczba grup: 3
//   typeof total poza funkcją: undefined

const groups = [[5, 4, 6], [3, 2], [4, 5, 5, 4]];

function average(grades) {
  // TU ZMIEŃ: dwie zmienne w tej funkcji nie mają let, więc „wyciekają” poza nią
  total = 0;
  for (i = 0; i < grades.length; i++) {
    total = total + grades[i];
  }
  return total / grades.length;
}

// TU ZMIEŃ: tu też brakuje let. Co robi z tym i funkcja average?
for (i = 0; i < groups.length; i++) {
  console.log("Grupa " + (i + 1) + ": średnia " + average(groups[i]));
}

console.log("Liczba grup: " + groups.length);
console.log("typeof total poza funkcją: " + typeof total);
