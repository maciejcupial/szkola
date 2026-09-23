// Task 2 of 5: change a property, add one, read one named in a variable.
// Expected:
//   Model: Orion 5
//   Cena: 1000 zł
//   Kolor: grafitowy
//   Pole storage: 128

const phone = {
  model: "Orion 5",
  price: 1200,
  storage: 128
};

// TU ZMIEŃ: obniż cenę (price) o 200, używając starej wartości

// TU ZMIEŃ: dopisz nową właściwość color z wartością "grafitowy"

console.log("Model: " + phone.model);
console.log("Cena: " + phone.price + " zł");
console.log("Kolor: " + phone.color);

const field = "storage";
// TU ZMIEŃ: ta linia szuka właściwości o nazwie „field”, popraw dostęp do phone
console.log("Pole " + field + ": " + phone.field);
