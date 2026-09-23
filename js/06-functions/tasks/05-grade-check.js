// Task 5 of 5 (for volunteers): points to a percentage and a grade.
// Scale: 0-39 niedostateczny, 40-54 dopuszczający, 55-74 dostateczny, 75-89 dobry,
// 90-97 bardzo dobry, 98-100 celujący.
// Expected on "Sprawdź":
//   42 and 50    ->  42 z 50 pkt to 84%, ocena: dobry
//   45.5 and 50  ->  45.5 z 50 pkt to 91%, ocena: bardzo dobry
//   19 and 50    ->  19 z 50 pkt to 38%, ocena: niedostateczny
//   abc and 50   ->  Wpisz liczby w oba pola, maksimum większe od 0
//   10 and 0     ->  Wpisz liczby w oba pola, maksimum większe od 0

function percentOf(points, maxPoints) {
  // TU ZMIEŃ: podziel points przez maxPoints, pomnóż przez 100 i zaokrąglij przez Math.round
  return 0;
}

function gradeFor(percent) {
  // TU ZMIEŃ: łańcuchem if, else if zwróć nazwę oceny według skali z nagłówka pliku
  return "?";
}

function checkGrade() {
  const points = parseFloat(document.getElementById("points").value);
  const maxPoints = parseFloat(document.getElementById("max-points").value);

  // TU ZMIEŃ: przy NaN albo maxPoints <= 0 wypisz „Wpisz liczby w oba pola, maksimum większe od 0”
  // i zakończ przez return. NaN sprawdzi Number.isNaN(liczba).

  const percent = percentOf(points, maxPoints);
  console.log(points + " z " + maxPoints + " pkt to " + percent + "%, ocena: " + gradeFor(percent));
}
