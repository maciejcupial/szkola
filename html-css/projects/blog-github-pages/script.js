// Shared script: footer year, dark theme, contact form check.

// Footer year
const yearField = document.getElementById("year");
if (yearField) {
  yearField.textContent = new Date().getFullYear();
}

// Dark theme: class on body; localStorage keeps it after closing the tab
const themeToggle = document.getElementById("theme-toggle");

if (localStorage.getItem("theme") === "dark") {
  document.body.classList.add("dark");
}

if (themeToggle) {
  themeToggle.addEventListener("click", () => {
    // toggle() returns true when the class ended up on
    const isDark = document.body.classList.toggle("dark");
    localStorage.setItem("theme", isDark ? "dark" : "light");
  });
}

// Contact form: only contact.html has it, the guard protects the other pages
const form = document.getElementById("contact-form");

if (form) {
  // Empty text clears the error
  const showError = (fieldId, text) => {
    document.getElementById("error-" + fieldId).textContent = text;
    // Second argument: true adds, false removes
    document.getElementById(fieldId).classList.toggle("invalid", text !== "");
  };

  const validate = () => {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();

    // TU ZMIEŃ: własne reguły i treści komunikatów
    const nameError = name === "" ? "Wpisz imię." : "";
    const emailError = email.includes("@") ? "" : "Adres e-mail musi mieć znak @.";
    const messageError = message.length < 10 ? "Wiadomość ma mieć co najmniej 10 znaków." : "";

    showError("name", nameError);
    showError("email", emailError);
    showError("message", messageError);

    return nameError === "" && emailError === "" && messageError === "";
  };

  form.addEventListener("submit", (event) => {
    // Stop the page reload
    event.preventDefault();
    const success = document.getElementById("success");
    success.textContent = validate()
      ? "Dziękuję! Formularz jest poprawny (na GitHub Pages nie ma dokąd go wysłać)."
      : "";
  });
}
