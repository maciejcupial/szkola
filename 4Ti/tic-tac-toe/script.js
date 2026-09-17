// Game logic for the tic-tac-toe board from index.html.
// This file keeps the state of the game, reacts to clicks on the nine cells and writes
// the message shown in #status. The colors of the X and O signs come from style.css.
// Two functions marked TU ZMIEŃ are left empty on purpose: they are the exercise.

// The board as data: nine texts, one per square, in the same order as data-cell in the HTML.
// An empty text "" means the square is still free, otherwise it holds "X" or "O".
// let creates a variable that can be given a new value later, unlike const.
let board = ["", "", "", "", "", "", "", "", ""];

// Whose turn it is. X always starts.
let currentPlayer = "X";

// True once somebody won or the board is full, so further clicks are ignored.
let gameOver = false;

// querySelectorAll finds every element matching the CSS selector and returns them as a list.
// Here: all nine board buttons, in the order they appear in the HTML.
const cells = document.querySelectorAll(".cell");

// The paragraph where the message for the player is shown.
// The variable is called statusText, not status, because window.status is a built in browser name.
const statusText = document.getElementById("status");

// The eight ways to win: three rows, three columns, two diagonals, written as cell numbers.
// const means the name cannot be pointed at another value, which fits a fixed list of rules.
// A name in CAPITALS is a convention for a value that never changes while the program runs.
const WINNING_LINES = [
  [0, 1, 2], [3, 4, 5], [6, 7, 8],
  [0, 3, 6], [1, 4, 7], [2, 5, 8],
  [0, 4, 8], [2, 4, 6],
];

// TU ZMIEŃ: dopisz, co się dzieje po kliknięciu pola o numerze index.
function makeMove(index) {
  // This log stays until the function works: open the console with F12 to see the clicked number.
  console.log("kliknięto pole", index);

  // 1. If gameOver is true, or board[index] is not an empty text, leave the function with return.
  //    Without this check a click on a taken square would overwrite the sign already there.
  // 2. Write the sign into the data: board[index] = currentPlayer.
  // 3. Show the sign on the button: cells[index].textContent = currentPlayer
  //    and add the matching color class, cells[index].classList.add("x") for X, "o" for O.
  //    classList.add attaches a CSS class to an element, so style.css can color the sign.
  // 4. Ask who won: const winner = findWinner().
  // 5. If winner is "X" or "O", write „Wygrywa X” (or O) into statusText.textContent
  //    and set gameOver = true. If winner is "draw", write „Remis” and set gameOver = true.
  // 6. Otherwise switch the player: currentPlayer becomes "O" when it was "X", and "X" when it was "O".
  //    Then write „Ruch gracza: ” plus the new currentPlayer into statusText.textContent.
}

// TU ZMIEŃ: dopisz sprawdzanie, kto wygrał.
function findWinner() {
  // 1. Go through every line in WINNING_LINES, for example with a for...of loop.
  //    Each line is a small array of three cell numbers, so line[0], line[1] and line[2].
  // 2. For one line: if board[line[0]] is not "" and board[line[0]] === board[line[1]]
  //    and board[line[1]] === board[line[2]], the same sign fills the whole line,
  //    so return board[line[0]]. Three equals signs compare values, one equals sign assigns.
  // 3. After the loop, if no square holds "" any more, the board is full, so return "draw".
  //    board.includes("") answers whether an empty text is still somewhere in the array.
  // 4. Otherwise the game goes on, so return null.
  return null;
}

// Starts the game from scratch: this function is finished, nothing to change here.
function newGame() {
  board = ["", "", "", "", "", "", "", "", ""];
  currentPlayer = "X";
  gameOver = false;

  // forEach runs the given function once for every element of the list, here for every cell button.
  cells.forEach((cell) => {
    // textContent sets the plain text inside an element, it never treats the value as HTML.
    cell.textContent = "";
    // Remove both color classes, whichever of them the cell happened to have.
    cell.classList.remove("x", "o");
  });

  statusText.textContent = "Ruch gracza: X";
}

// addEventListener tells the browser: when this event happens on this element, run this function.
// Each cell reports its own number, read from the data-cell attribute through dataset.cell.
// dataset gives a text, so Number() turns "4" into the number 4.
cells.forEach((cell) => {
  cell.addEventListener("click", () => makeMove(Number(cell.dataset.cell)));
});

// The restart button simply calls newGame.
document.getElementById("new-game").addEventListener("click", newGame);
