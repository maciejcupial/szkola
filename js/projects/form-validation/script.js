// Validation for the form in index.html.

const form = document.getElementById("signup-form");

// Shows the message under a field; an empty text clears it.
function showError(fieldId, text) {
  document.getElementById("error-" + fieldId).textContent = text;
  // Second argument true adds the class, false removes it.
  document.getElementById(fieldId).classList.toggle("invalid", text !== "");
}

// Returns true when the form has no errors.
function validate() {
  let isValid = true;

  // trim(): a field with only spaces counts as empty.
  const name = document.getElementById("name").value.trim();
  if (name === "") {
    showError("name", "Wpisz imię i nazwisko.");
    isValid = false;
  } else {
    // Clears the old message after the field is fixed.
    showError("name", "");
  }

  const email = document.getElementById("email").value.trim();
  if (!email.includes("@")) {
    showError("email", "Adres e-mail musi zawierać znak @.");
    isValid = false;
  } else {
    showError("email", "");
  }

  // Number("") is 0, so an empty field fails the range check too.
  const age = Number(document.getElementById("age").value);
  if (age < 13 || age > 120) {
    showError("age", "Wiek od 13 do 120 lat.");
    isValid = false;
  } else {
    showError("age", "");
  }

  if (!document.getElementById("consent").checked) {
    showError("consent", "Bez zgody nie da się zapisać.");
    isValid = false;
  } else {
    showError("consent", "");
  }

  // TU ZMIEŃ: kolejne reguły, każda to jeden if według wzoru wyżej.

  return isValid;
}

form.addEventListener("submit", (event) => {
  if (!validate()) {
    // Stops sending and reloading, which would wipe the messages.
    event.preventDefault();
    return;
  }

  // action="" points nowhere yet. Delete this line once it points at a real script.
  event.preventDefault();

  document.getElementById("success").textContent = "Dane poprawne. Formularz gotowy do wysłania.";
});
