// Shared script for all four pages of the blog.
// It does three things: writes the year in the footer, switches the dark theme,
// and checks the contact form. Every page loads this one file at the end of body.

// --- Part 1: the year in the footer ---------------------------------------
// const creates a name that will not be reassigned later.
// getElementById finds the one element with that id, or null when the page has none.
const yearField = document.getElementById("year");
// textContent writes plain text, safer than innerHTML because it never runs HTML tags.
if (yearField) {
  yearField.textContent = new Date().getFullYear();
}

// --- Part 2: dark theme ---------------------------------------------------
// The theme is just a class on body. style.css gives body.dark different color values.
// localStorage is a small box in the browser that survives closing the tab.
// Key "theme" holds either "dark" or "light".
const themeToggle = document.getElementById("theme-toggle");

// Read the saved choice on load, before the visitor sees anything.
// === compares value and type, unlike == which converts types first.
if (localStorage.getItem("theme") === "dark") {
  document.body.classList.add("dark");
}

if (themeToggle) {
  // addEventListener runs the given function every time the event happens, here a click.
  themeToggle.addEventListener("click", () => {
    // classList.toggle removes the class if it is there, adds it if it is not,
    // and returns true when the class ended up on the element.
    const isDark = document.body.classList.toggle("dark");
    localStorage.setItem("theme", isDark ? "dark" : "light");
  });
}

// --- Part 3: contact form ------------------------------------------------
// Only contact.html has this form, so everything below is wrapped in a guard.
// Without it the other three pages would crash on a missing element.
const form = document.getElementById("contact-form");

if (form) {
  // Shows the error text under one field and marks the field itself.
  // An empty text clears the error, so one function handles both cases.
  const showError = (fieldId, text) => {
    document.getElementById("error-" + fieldId).textContent = text;
    // The second argument of toggle decides: true adds .invalid, false removes it.
    document.getElementById(fieldId).classList.toggle("invalid", text !== "");
  };

  // Checks every field, shows the messages and returns true when the form is correct.
  const validate = () => {
    // trim() removes spaces, tabs and line breaks from both ends of the text,
    // so a field with only spaces counts as empty.
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    // Each rule produces either an error text or an empty string.
    // TU ZMIEŃ: własne reguły i treści komunikatów
    const nameError = name === "" ? "Wpisz imię." : "";
    const emailError = email.includes("@") ? "" : "Adres e-mail musi mieć znak @.";
    const messageError = message.length < 10 ? "Wiadomość ma mieć co najmniej 10 znaków." : "";

    showError("name", nameError);
    showError("email", emailError);
    showError("message", messageError);

    // The form is correct only when all three texts stayed empty.
    return nameError === "" && emailError === "" && messageError === "";
  };

  form.addEventListener("submit", (event) => {
    // preventDefault stops the browser from reloading the page and sending the form.
    event.preventDefault();
    const success = document.getElementById("success");
    success.textContent = validate()
      ? "Dziękuję! Formularz jest poprawny (na GitHub Pages nie ma dokąd go wysłać)."
      : "";
  });
}
