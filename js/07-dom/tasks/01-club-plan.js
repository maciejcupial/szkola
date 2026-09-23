// Task 1 of 5: find elements by id and class, change text and colour on load.
// Expected:
//   heading:  Plan koła informatycznego
//   summary:  Zajęć w planie: 4   (the number in bold, the whole line green)
//   volunteer step: Sieci: adresy IP (start)

const summary = document.getElementById("summary");

let count = 0;

// TU ZMIEŃ: znajdź nagłówek po id "title" i ustaw mu textContent "Plan koła informatycznego"

// TU ZMIEŃ: pobierz elementy z klasą "lesson" do stałej lessons, a do count wpisz jej length

// TU ZMIEŃ: ustaw summary.style.color na "green"

summary.innerHTML = "Zajęć w planie: <strong>" + count + "</strong>";
