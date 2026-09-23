// Task 1 of 5: a "like" button that counts clicks, with two listeners.
// Expected after three clicks:
//   the page shows: Polubienia: 3
//   the console shows three times: Ktoś polubił wpis

const likeButton = document.getElementById("like");
const likesText = document.getElementById("likes");

let likeCount = 0;

function handleLike() {
  // TU ZMIEŃ: zwiększ likeCount o 1 i wpisz do likesText tekst „Polubienia: ” z liczbą
}

// TU ZMIEŃ: napisz funkcję logLike, która wypisuje w konsoli „Ktoś polubił wpis”

// TU ZMIEŃ: podepnij handleLike i logLike pod zdarzenie "click" przycisku likeButton
