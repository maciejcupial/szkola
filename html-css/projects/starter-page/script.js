// Page behaviour: reacts to the button click.

// Visible in the console (F12)
console.log("Strona działa, skrypt też.");

const greetButton = document.getElementById("greet-button");
const greeting = document.getElementById("greeting");

greetButton.addEventListener("click", () => {
  // TU ZMIEŃ: powitanie, które pojawi się po kliknięciu
  greeting.textContent = "Cześć, tu Twoja pierwsza strona.";
});

// TU ZMIEŃ: własny kod, np. reakcja na kolejny przycisk
