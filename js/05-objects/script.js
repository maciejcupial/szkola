// Objects: properties, methods, this. Lessons 14-15.
// Output goes to the console (F12).

// ---- An object: many values under one name ----

const student = { firstName: "Anna", lastName: "Kowalska", birthYear: 1985 };
console.log(student); // {firstName: 'Anna', lastName: 'Kowalska', birthYear: 1985}

// ---- Two ways to read a property ----

console.log(student.firstName); // Anna
console.log(student["lastName"]); // Kowalska
// Letter case counts: firstname is not firstName.
console.log(student.firstname); // undefined

// ---- Changing and adding properties ----

student.birthYear = 1986;
console.log(student.birthYear); // 1986
student.city = "Warszawa";
console.log(student["city"]); // Warszawa

// ---- The bracket when the property name sits in a variable ----

// student.field would look for a property literally called "field".
const field = "city";
console.log(student[field]); // Warszawa

// ---- A method: a property whose value is a function ----

// this = the object the method was called on.
const teacher = {
  firstName: "Marek",
  subject: "informatyka",
  introduceSelf: function() {
    return "Jestem " + this.firstName + " i uczę: " + this.subject;
  }
};
console.log(teacher.introduceSelf()); // Jestem Marek i uczę: informatyka
// Without () the method does not run.
console.log(teacher.introduceSelf); // ƒ () { return "Jestem " + ... }

const secondTeacher = {
  firstName: "Ewa",
  subject: "matematyka",
  introduceSelf: function() {
    return "Jestem " + this.firstName + " i uczę: " + this.subject;
  }
};
console.log(secondTeacher.introduceSelf()); // Jestem Ewa i uczę: matematyka

// ---- An array of objects and the for...of loop ----

const books = [
  { title: "Hobbit", pages: 310 },
  { title: "Mały Książę", pages: 96 },
  { title: "Kwiat paproci", pages: 150 }
];
let totalPages = 0;
for (const book of books) {
  console.log(book.title + ": " + book.pages + " stron");
  totalPages += book.pages;
}
// Hobbit: 310 stron
// Mały Książę: 96 stron
// Kwiat paproci: 150 stron
console.log("Razem: " + totalPages + " stron"); // Razem: 556 stron

books.push({ title: "Akademia pana Kleksa", pages: 220 });
console.log(books.length); // 4

// TU ZMIEŃ: zbuduj obiekt o sobie (na przykład z ulubioną grą), dopisz mu metodę z this i wywołaj ją
