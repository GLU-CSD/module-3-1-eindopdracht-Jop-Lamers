
//bolletje
let productsCount = 0;

if (localStorage.getItem("productsCount")) {
  productsCount = localStorage.getItem("productsCount");
} else {
  productsCount = 0;
  localStorage.setItem("productsCount", 0);
}

document.getElementById("winkelwagenbolletje").innerHTML = productsCount;

function winkelWagenAdd() {
  productsCount = Number(productsCount) + 1;
  localStorage.setItem("productsCount", productsCount);
  document.getElementById("winkelwagenbolletje").innerHTML = productsCount;
}
//winkelwagen

