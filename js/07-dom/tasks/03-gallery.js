// Task 3 of 5: nextImage() swaps src and alt and updates the caption.
// Expected after two clicks: image-c.svg, alt „Obrazek C”, caption „Obrazek 3 z 3”.
// Expected after the third click: image-a.svg, alt „Obrazek A”, caption „Obrazek 1 z 3”.

const files = ["../image-a.svg", "../image-b.svg", "../image-c.svg"];
const names = ["Obrazek A", "Obrazek B", "Obrazek C"];

let index = 0;

const photo = document.getElementById("photo");
console.log(photo.getAttribute("src")); // ../image-a.svg

function nextImage() {
  // TU ZMIEŃ: zwiększ index o 1, a gdy index === files.length, ustaw go z powrotem na 0

  // TU ZMIEŃ: photo.setAttribute("src", ...) i photo.setAttribute("alt", ...) z tablic files i names

  // TU ZMIEŃ: do akapitu "caption" wpisz "Obrazek " + (index + 1) + " z " + files.length
}
