// Task 2 of 5: replace every var with const or let; the output must not change.
// Expected:
//   Gracz: Kometa
//   Klasa postaci: łuczniczka
//   Poziom: 3
//   Złoto: 150
//   Kometa, łuczniczka, poziom 3

// TU ZMIEŃ: w pięciu liniach poniżej zamień var na const albo let
var nickname = "Kometa";
var characterClass = "łuczniczka";
var level = 1;
var gold = 100;
var goldPerQuest = 50;

level++;
level++;

gold = gold + goldPerQuest;

// Leave the lines below as they are.
console.log("Gracz: " + nickname);
console.log("Klasa postaci: " + characterClass);
console.log("Poziom: " + level);
console.log("Złoto: " + gold);
console.log(nickname + ", " + characterClass + ", poziom " + level);
