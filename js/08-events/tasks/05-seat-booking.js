// Task 5 of 5 (for volunteers): seat booking with a limit, state kept in an array.
// Expected after seats 2, 2, 4, 5, 6 and then "Zacznij od nowa":
//   click 2: button 2 shows "zajęte", Zarezerwowane: 1 z 3, Zarezerwowano miejsce 2.
//   click 2: nothing changes, Miejsce 2 jest już zajęte.
//   click 4: Zarezerwowane: 2 z 3, Zarezerwowano miejsce 4.
//   click 5: Zarezerwowane: 3 z 3, Zarezerwowano miejsce 5.
//   click 6: button 6 still shows 6, Limit: najwyżej 3 miejsca.
//   reset: buttons show 1 to 6 again, Zarezerwowane: 0 z 3, Wybierz miejsce.

const MAX_SEATS = 3;

// false = free, true = booked. Index 0 is the seat labelled 1.
const seats = [false, false, false, false, false, false];

let bookedCount = 0;

const seatButtons = document.getElementsByClassName("seat");
const summary = document.getElementById("summary");
const statusText = document.getElementById("status");
const resetButton = document.getElementById("reset");

function handleSeatClick(event) {
  // TU ZMIEŃ: index z data-seat; miejsce zajęte albo limit: komunikat i return;
  //   inaczej: seats, bookedCount, napis „zajęte”, klasa "seat taken", komunikat i licznik
}

function handleReset() {
  // TU ZMIEŃ: pętlą for zwolnij miejsca (false, napis i + 1, klasa "seat"), wyzeruj licznik i teksty
}

// TU ZMIEŃ: podepnij handleSeatClick pod "click" każdego z seatButtons, a handleReset pod resetButton
