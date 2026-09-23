// Task 3 of 5: a method introduceSelf that uses this.
// Expected:
//   Jestem Burek, pies, mam 3 lata
//   Jestem Mruczek, kot, mam 2 lata
//   Jestem Burek, pies, mam 4 lata

const pet = {
  name: "Burek",
  species: "pies",
  age: 3,
  introduceSelf: function() {
    // TU ZMIEŃ: zwróć „Jestem Burek, pies, mam 3 lata” z this.name, this.species i this.age
    return "";
  }
};

const cat = {
  name: "Mruczek",
  species: "kot",
  age: 2,
  introduceSelf: function() {
    // TU ZMIEŃ: wpisz tu dokładnie to samo co w metodzie obiektu pet
    return "";
  }
};

console.log(pet.introduceSelf());
console.log(cat.introduceSelf());

pet.age = 4;
console.log(pet.introduceSelf());
