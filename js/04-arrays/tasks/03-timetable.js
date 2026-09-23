// Task 3 of 6: split a text, replace "wf" with "fizyka", check for "chemia".
// Expected:
//   (5) ['matematyka', 'polski', 'wf', 'informatyka', 'angielski']
//   Liczba lekcji: 5
//   wf jest pod indeksem 2
//   (5) ['matematyka', 'polski', 'fizyka', 'informatyka', 'angielski']
//   Chemii nie ma w planie

const data = "matematyka,polski,wf,informatyka,angielski";

// TU ZMIEŃ: zamiast [] potnij napis data w miejscach przecinków
const lessons = [];
console.log(lessons);
console.log("Liczba lekcji: " + lessons.length);

// TU ZMIEŃ: zamiast -1 znajdź indeks lekcji "wf" w tablicy lessons
const index = -1;
console.log("wf jest pod indeksem " + index);

// TU ZMIEŃ: jeśli index jest różny od -1, wpisz "fizyka" do lessons[index]

console.log(lessons);

// TU ZMIEŃ: sprawdź indexOf "chemia": "Chemia jest w planie" albo "Chemii nie ma w planie"
