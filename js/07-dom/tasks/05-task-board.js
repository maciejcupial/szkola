// Task 5 of 5 (for volunteers): renderBoard() builds the list and the progress bar from tasks.
// Expected on load:
//   list:      Powtórzyć pętle for, Zrobić stronę z formularzem, Przeczytać o DOM, Oddać projekt
//              (first and third crossed out, class "done")
//   progress:  Zrobione: 2 z 4
//   bar:       style.width "50%"
// Expected after „Zrób wszystkie”: all four crossed out, „Zrobione: 4 z 4”, width "100%".

const tasks = [
  { title: "Powtórzyć pętle for", done: true },
  { title: "Zrobić stronę z formularzem", done: false },
  { title: "Przeczytać o DOM", done: true },
  { title: "Oddać projekt", done: false }
];

function renderBoard() {
  const board = document.getElementById("board");
  // Without this a second call would double the list.
  board.innerHTML = "";

  let doneCount = 0;

  // TU ZMIEŃ: for...of po tasks: <li> z task.title dołącz do board; przy task.done klasa "done"
  // i doneCount++

  document.getElementById("progress").textContent = "Zrobione: " + doneCount + " z " + tasks.length;

  // TU ZMIEŃ: ustaw style.width elementu "bar-fill" na doneCount * 100 / tasks.length + "%"
}

function finishAll() {
  for (const task of tasks) {
    task.done = true;
  }
  renderBoard();
}

renderBoard();
