// Task 6 of 6 (optional): split seconds into hours, minutes and seconds with / and %.
// Expected:
//   7384 s to 2 h 3 min 4 s
//   Sprawdzenie: true
//   Równo pełna godzina: false
// For 7200: 7200 s to 2 h 0 min 0 s, true, true.

// TU ZMIEŃ: możesz wpisać inną liczbę sekund i sprawdzić, czy wynik się zgadza
const totalSeconds = 7384;

// TU ZMIEŃ: w każdej linii zamiast 0 wpisz działanie (użyj %, - i /)
let hours = 0;
let minutes = 0;
let seconds = 0;

console.log(totalSeconds + " s to " + hours + " h " + minutes + " min " + seconds + " s");

// TU ZMIEŃ: sprawdź przez ===, czy h, min i s zamienione na sekundy dają totalSeconds
let isCorrect = false;
console.log("Sprawdzenie: " + isCorrect);

// TU ZMIEŃ: zamiast false sprawdź, czy minuty i sekundy są równe 0 (dwa porównania i &&)
let isFullHour = false;
console.log("Równo pełna godzina: " + isFullHour);
