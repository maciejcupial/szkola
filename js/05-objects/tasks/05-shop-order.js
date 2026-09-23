// Task 5 of 5 (for volunteers): an order with items and two methods, itemsTotal and shipping.
// Expected:
//   Zeszyt x3 = 12 zł
//   Długopis x5 = 15 zł
//   Plecak x1 = 60 zł
//   Towary: 87 zł, dostawa: 15 zł
//   Dopisano: Piórnik
//   Towary: 107 zł, dostawa: 0 zł

const order = {
  items: [
    { name: "Zeszyt", price: 4, quantity: 3 },
    { name: "Długopis", price: 3, quantity: 5 },
    { name: "Plecak", price: 60, quantity: 1 }
  ],
  itemsTotal: function() {
    // TU ZMIEŃ: przejdź pętlą for...of po this.items i zsumuj cenę razy liczbę sztuk
    return 0;
  },
  shipping: function() {
    // TU ZMIEŃ: zwróć 15, gdy this.itemsTotal() jest mniejsze niż 100, w przeciwnym razie 0
    return 0;
  }
};

// TU ZMIEŃ: pętlą for...of po order.items wypisz każdą pozycję, na przykład „Zeszyt x3 = 12 zł”

console.log("Towary: " + order.itemsTotal() + " zł, dostawa: " + order.shipping() + " zł");

order.items.push({ name: "Piórnik", price: 20, quantity: 1 });
console.log("Dopisano: " + order.items[order.items.length - 1].name);
console.log("Towary: " + order.itemsTotal() + " zł, dostawa: " + order.shipping() + " zł");
