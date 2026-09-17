// Validation for the form in index.html.
// validate() runs one if per rule and returns true only when every rule passed.
// showError() writes a message into the span error-<field id> and marks the input with .invalid.
// The red and green look of those two states comes from style.css.

// const gives a value a name that cannot later point at a different element.
// getElementById finds a single element by its id attribute, here <form id="signup-form">.
const form = document.getElementById("signup-form");

// Shows the message under one field and marks the input as wrong. An empty text clears both.
function showError(fieldId, text) {
  // textContent puts in plain text, so whatever the user typed is never treated as HTML.
  document.getElementById("error-" + fieldId).textContent = text;
  // classList.toggle adds the class when the second argument is true and removes it when false.
  // !== compares strictly, without converting types first, and that is the comparison to use in JS.
  document.getElementById(fieldId).classList.toggle("invalid", text !== "");
}

// Checks all the fields and returns true when the form has no errors.
function validate() {
  // let, unlike const, names a value that changes later. This one drops to false on the first error.
  let isValid = true;

  // trim() removes spaces, tabs and line breaks from the start and the end of the text,
  // so a field holding nothing but spaces still counts as empty.
  const name = document.getElementById("name").value.trim();
  if (name === "") {
    showError("name", "Wpisz imię i nazwisko.");
    isValid = false;
  } else {
    // The else branch clears an old message, otherwise a fixed field would stay red forever.
    showError("name", "");
  }

  // includes() answers whether the text contains the given piece. A full address check is much
  // harder, and for a school exercise the @ sign is enough.
  const email = document.getElementById("email").value.trim();
  if (!email.includes("@")) {
    showError("email", "Adres e-mail musi zawierać znak @.");
    isValid = false;
  } else {
    showError("email", "");
  }

  // Number() turns the text from the input into a number. An empty field gives Number("") === 0,
  // and 0 is smaller than 13, so an untouched field lands in the same range error as a wrong age.
  const age = Number(document.getElementById("age").value);
  if (age < 13 || age > 120) {
    showError("age", "Wiek od 13 do 120 lat.");
    isValid = false;
  } else {
    showError("age", "");
  }

  // A checkbox has no text to read, its state sits in the checked property, true or false.
  if (!document.getElementById("consent").checked) {
    showError("consent", "Bez zgody nie da się zapisać.");
    isValid = false;
  } else {
    showError("consent", "");
  }

  // TU ZMIEŃ: kolejne reguły. Jedna reguła to jeden if według wzoru wyżej:
  // odczytaj pole, sprawdź warunek, w if wywołaj showError z komunikatem i ustaw isValid = false,
  // a w else wywołaj showError z pustym tekstem, żeby skasować stary komunikat.

  return isValid;
}

// addEventListener runs the given function every time the event happens, here the submit of the form.
form.addEventListener("submit", (event) => {
  if (!validate()) {
    // preventDefault() stops the browser's default reaction to the event. For a submit that reaction
    // is sending the form and reloading the page, which would wipe the messages off the screen.
    event.preventDefault();
    return;
  }

  // The data is correct, but action="" points nowhere yet, so the page must not be sent anywhere.
  // Delete this single line once action points at a real script that receives the form.
  event.preventDefault();

  document.getElementById("success").textContent = "Dane poprawne. Formularz gotowy do wysłania.";
});
