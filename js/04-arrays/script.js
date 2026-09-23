// Arrays, three lessons. Chrome adds the length in front of an array: (2) ['a', 'b'].

// ---- Lesson 1: create an array, read one element, count the elements ----

const shopping = ["chleb", "mleko", "ser", "hummus", "makaron"];
console.log(shopping); // ['chleb', 'mleko', 'ser', 'hummus', 'makaron']

console.log(shopping[0]); // chleb
console.log(shopping[2]); // ser

console.log(shopping.length); // 5
// The last index is length - 1.
console.log(shopping[shopping.length - 1]); // makaron

// No error for a missing index, just undefined.
console.log(shopping[10]); // undefined

const student = ["Ala", 25, true];
console.log(student[1]); // 25

// Round brackets: new Array[1, 2, 3] is an error.
const numbersBuilt = new Array(1, 2, 3);
console.log(numbersBuilt.length); // 3

// ---- Lesson 2: add, remove, find and replace elements ----

// const protects the variable, the array can still change.
const cities = ["Manchester", "Liverpool"];

cities.push("Cardiff");
console.log(cities); // ['Manchester', 'Liverpool', 'Cardiff']

const removedCity = cities.pop();
console.log(removedCity); // Cardiff
console.log(cities); // ['Manchester', 'Liverpool']

// Same as push(): the first free index is length.
cities[cities.length] = "Leeds";
console.log(cities); // ['Manchester', 'Liverpool', 'Leeds']

// unshift() moves every other element one index further.
cities.unshift("Edinburgh");
console.log(cities); // ['Edinburgh', 'Manchester', 'Liverpool', 'Leeds']
console.log(cities.indexOf("Manchester")); // 1

const firstCity = cities.shift();
console.log(firstCity); // Edinburgh

const index = cities.indexOf("Liverpool");
console.log(index); // 1
cities[index] = "Bristol";
console.log(cities); // ['Manchester', 'Bristol', 'Leeds']

console.log(cities.indexOf("Paris")); // -1

// split() is called on a text, not on an array.
const data = "jabłko,gruszka,banan";
const fruits = data.split(",");
console.log(fruits); // ['jabłko', 'gruszka', 'banan']

// length ignores text keys; in JavaScript use an object for them.
student["technik"] = "informatyk";
console.log(student.length); // 3

// ---- Lesson 3: go through every element ----

// < not <=: with <= the last round reads fruits[3], which is undefined.
for (let i = 0; i < fruits.length; i++) {
  console.log(i + ": " + fruits[i]); // 0: jabłko, 1: gruszka, 2: banan
}

// The accumulator starts BEFORE the loop, inside it would reset every round.
const numbers = [4, 8, 15, 16, 23, 42];
let sum = 0;
for (let i = 0; i < numbers.length; i++) {
  sum += numbers[i];
}
console.log(sum); // 108

// Without "" the result would start with the word "undefined".
let joined = "";
for (let i = 0; i < fruits.length; i++) {
  joined += fruits[i];
}
console.log(joined); // jabłkogruszkabanan

for (const fruit of fruits) {
  console.log(fruit); // jabłko, gruszka, banan
}

// forEach() calls the function once per element; break does not work here.
fruits.forEach(function (fruit) {
  console.log("Owoc: " + fruit); // Owoc: jabłko, Owoc: gruszka, Owoc: banan
});

// TU ZMIEŃ: utwórz własną tablicę, dopisz do niej element przez push() i wypisz wszystko pętlą for...of
