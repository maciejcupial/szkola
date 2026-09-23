// Task 4 of 5: parseFloat and Math in four functions that take an array.
// Expected:
//   Wyniki: 87, 92.5, 78, 95, 81.5
//   Najlepszy wynik: 95
//   Najsłabszy wynik: 78
//   Średnia po zaokrągleniu: 87

const results = ["87 pkt", "92.5 pkt", "78 pkt", "95 pkt", "81.5 pkt"];

function parseScores(texts) {
  const scores = [];
  // TU ZMIEŃ: każdy tekst z texts zamień przez parseFloat i dopisz do scores (push)
  return scores;
}

// The parameter scores is local, not the const scores at the bottom.
function bestScore(scores) {
  // TU ZMIEŃ: zacznij od best = scores[0], potem w pętli: best = Math.max(best, kolejny wynik)
  return 0;
}

function worstScore(scores) {
  // TU ZMIEŃ: tak samo jak bestScore, tylko z Math.min
  return 0;
}

function roundedAverage(scores) {
  // TU ZMIEŃ: zsumuj wyniki w pętli, podziel przez scores.length i zaokrąglij przez Math.round
  return 0;
}

const scores = parseScores(results);
console.log("Wyniki: " + scores.join(", "));
console.log("Najlepszy wynik: " + bestScore(scores));
console.log("Najsłabszy wynik: " + worstScore(scores));
console.log("Średnia po zaokrągleniu: " + roundedAverage(scores));
