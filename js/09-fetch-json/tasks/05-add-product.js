// Task 5 of 5 (dla chętnych): send a new product to the server as JSON with POST.
// Expected (fresh setup.sql): "Linijka" + 2.40, then an empty name + 5, then "<b>Test</b>" + 1:
//   the list "Dodane teraz" shows: Linijka - 2.40 zł, <b>Test</b> - 1.00 zł (tags as plain text)
//   after the empty name the page shows: Podaj nazwę i cenę większą od zera.
//   ../index.html now lists 5 products

const form = document.getElementById("product-form");
const nameField = document.getElementById("name");
const priceField = document.getElementById("price");
const formError = document.getElementById("form-error");
const addedList = document.getElementById("added-list");

async function handleSubmit(event) {
  // TU ZMIEŃ: zatrzymaj przeładowanie strony przez event.preventDefault()

  // TU ZMIEŃ: wyślij await fetch("05-add-product.php", { ... }) z trzema ustawieniami:
  //   method: "POST"
  //   headers: { "Content-Type": "application/json" }
  //   body: JSON.stringify({ name: nameField.value, price: priceField.value })

  // TU ZMIEŃ: zamień odpowiedź na obiekt data przez await response.json()

  // TU ZMIEŃ: jeśli !response.ok, wpisz data.error do formError i zakończ (return)

  // TU ZMIEŃ: wyczyść formError, dołącz do addedList "li" z tekstem „nazwa - cena zł” z data,
  // wyczyść oba pola
}

// TU ZMIEŃ: podepnij handleSubmit pod zdarzenie "submit" formularza form
