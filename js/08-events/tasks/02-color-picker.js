// Task 2 of 5: one handler for three buttons, told apart by event.target.
// Expected after a click on "Zielony":
//   the box shows: Wybrano: Zielony
//   the box background is #1a7f37 (green) and its text is white
// After a click on "Czerwony" the box shows "Wybrano: Czerwony" on #d1242f, and so on.

const preview = document.getElementById("preview");

const colorButtons = document.getElementsByClassName("color-button");

function handleColorClick(event) {
  // TU ZMIEŃ: wpisz do preview „Wybrano: ” i napis klikniętego przycisku (event.target.textContent)

  // TU ZMIEŃ: tło preview na data-color klikniętego przycisku, kolor tekstu na "#ffffff"
}

// TU ZMIEŃ: pętlą for (const button of colorButtons) podepnij handleColorClick pod "click"
