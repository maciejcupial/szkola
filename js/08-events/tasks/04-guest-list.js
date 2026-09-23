// Task 4 of 5: a form that adds names to a list, with an empty-field check.
// Expected after "Zapisz" with an empty field, then "Ala" + "Zapisz", then "Olek" + "Zapisz":
//   after the first click the page shows under the field: Wpisz imię.
//   at the end the list shows two items: Ala, Olek
//   the page shows: Zapisanych gości: 2
//   the error message is empty, the field is empty, the page never reloaded

const form = document.getElementById("signup");
const nameField = document.getElementById("name");
const errorName = document.getElementById("error-name");
const guestList = document.getElementById("guest-list");
const guestCountText = document.getElementById("guest-count");

let guestCount = 0;

function handleSubmit(event) {
  // TU ZMIEŃ: zatrzymaj wysłanie formularza przez event.preventDefault()

  // TU ZMIEŃ: jeśli nameField.value === "", wpisz do errorName „Wpisz imię.” i zakończ (return)

  // TU ZMIEŃ: wyczyść errorName, utwórz element "li" z imieniem z pola i dopisz go do guestList

  // TU ZMIEŃ: zwiększ guestCount, wpisz „Zapisanych gości: ” z liczbą, wyczyść pole
}

// TU ZMIEŃ: podepnij handleSubmit pod zdarzenie "submit" formularza form
