// Task 4 of 6: a piggy bank filled with a while loop, BONUS every fourth week.
// Expected:
// Tydzień 1: 45 zł / Tydzień 2: 90 zł / Tydzień 3: 135 zł / Tydzień 4: 200 zł /
// Tydzień 5: 245 zł / Tydzień 6: 290 zł / Tydzień 7: 335 zł (seven lines), then
// Cel 300 zł osiągnięty po 7 tygodniach, masz 335 zł

const GOAL = 300;
const WEEKLY = 45;
const BONUS = 20;

let savings = 0;
let week = 0;

// Without week++ inside, the loop never ends and the tab freezes.

// TU ZMIEŃ: pętla while (savings < GOAL): week++, WEEKLY (co 4. tydzień też BONUS), wypisz saldo

console.log(`Cel ${GOAL} zł osiągnięty po ${week} tygodniach, masz ${savings} zł`);
