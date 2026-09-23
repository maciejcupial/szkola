// Task 3 of 5: count keys, show the last one, clear the field with Escape.
// Expected after typing k, o, t and then Escape:
//   the page shows: Naciśnięcia klawiszy: 4
//   the page shows: Ostatni klawisz: Escape
//   the field is empty

const messageField = document.getElementById("message");
const keyCountText = document.getElementById("key-count");
const lastKeyText = document.getElementById("last-key");

let keyCount = 0;

function handleKeydown(event) {
  // TU ZMIEŃ: zwiększ keyCount o 1 i wpisz do keyCountText „Naciśnięcia klawiszy: ” z liczbą

  // TU ZMIEŃ: wpisz do lastKeyText „Ostatni klawisz: ” i event.key

  // TU ZMIEŃ: jeśli event.key to "Escape", wyczyść pole: messageField.value = "";
}

// TU ZMIEŃ: podepnij handleKeydown pod zdarzenie "keydown" pola messageField
