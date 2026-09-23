// Tic-tac-toe game logic. The two TU ZMIEŃ functions are the exercise.

// Nine squares in data-cell order: "" free, "X" or "O".
let board = ["", "", "", "", "", "", "", "", ""];

let currentPlayer = "X";

let gameOver = false;

const cells = document.querySelectorAll(".cell");

// Not "status": window.status is a built in browser name.
const statusText = document.getElementById("status");

// Rows, columns, diagonals as cell numbers.
const WINNING_LINES = [
  [0, 1, 2], [3, 4, 5], [6, 7, 8],
  [0, 3, 6], [1, 4, 7], [2, 5, 8],
  [0, 4, 8], [2, 4, 6],
];

// TU ZMIEŃ: dopisz, co się dzieje po kliknięciu pola o numerze index.
function makeMove(index) {
  console.log("kliknięto pole", index);

  // 1. If gameOver or board[index] is not "", return.
  // 2. board[index] = currentPlayer.
  // 3. cells[index].textContent = currentPlayer; classList.add("x") or "o".
  // 4. const winner = findWinner().
  // 5. "X"/"O": „Wygrywa X” in statusText, gameOver = true; "draw": „Remis”, gameOver = true.
  // 6. Otherwise switch currentPlayer and write „Ruch gracza: ” plus the player.
}

// TU ZMIEŃ: dopisz sprawdzanie, kto wygrał.
function findWinner() {
  // 1. Loop over WINNING_LINES (for...of).
  // 2. board[line[0]] not "" and all three equal (===): return board[line[0]].
  // 3. After the loop: no "" left (board.includes("")): return "draw".
  // 4. Otherwise return null.
  return null;
}

// Finished, nothing to change here.
function newGame() {
  board = ["", "", "", "", "", "", "", "", ""];
  currentPlayer = "X";
  gameOver = false;

  cells.forEach((cell) => {
    cell.textContent = "";
    cell.classList.remove("x", "o");
  });

  statusText.textContent = "Ruch gracza: X";
}

// dataset.cell is text, so Number() turns "4" into 4.
cells.forEach((cell) => {
  cell.addEventListener("click", () => makeMove(Number(cell.dataset.cell)));
});

document.getElementById("new-game").addEventListener("click", newGame);
