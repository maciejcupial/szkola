// Task 6 of 6 (optional): count votes with split(), indexOf(), push() and a loop in a loop.
// Expected:
//   Oddanych głosów: 7
//   (4) ['pizza', 'kebab', 'sushi', 'pierogi']
//   pizza: 3
//   kebab: 2
//   sushi: 1
//   pierogi: 1
//   Wygrywa: pizza, liczba głosów: 3

const data = "pizza,kebab,pizza,sushi,kebab,pizza,pierogi";

// TU ZMIEŃ: zamiast [] potnij napis data w miejscach przecinków
const votes = [];
console.log("Oddanych głosów: " + votes.length);

const options = [];
// TU ZMIEŃ: pętla po votes, która dopisuje głos do options tylko wtedy, gdy go tam jeszcze nie ma
console.log(options);

// On a tie the first proposal wins: compare with >, not >=.
let winner = "";
let winnerVotes = 0;

// TU ZMIEŃ: pętla po options: licznik, pętla po votes, wypisz "pizza: 3", if zmienia zwycięzcę

console.log("Wygrywa: " + winner + ", liczba głosów: " + winnerVotes);
