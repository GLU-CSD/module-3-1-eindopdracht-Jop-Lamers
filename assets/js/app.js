// Variabele voor het bijhouden van het aantal producten in de winkelwagen
let productCount = 0;

// Controleer of er al een productCount in localStorage staat
if (localStorage.getItem("productCount")) {
  // Als er een waarde is, haal deze op uit localStorage
  productCount = localStorage.getItem("productCount");
} else {
  // Als er geen waarde is, stel deze in op 0 en sla op in localStorage
  productCount = 0;
  localStorage.setItem("productCount", 0);
}

// Toon het aantal producten in de winkelwagenbolletje (badge)
document.getElementById("winkelwagenbolletje").innerHTML = productCount;

// Functie om een product toe te voegen aan de winkelwagen
function winkelWagenAdd() {
  // Verhoog het aantal producten met 1
  productCount = Number(productCount) + 1;
  // Sla het nieuwe aantal op in localStorage
  localStorage.setItem("productCount", productCount);
  // Log het nieuwe aantal in de console
  console.log("winkelWagenAdd", productCount);
  // Update het winkelwagenbolletje met het nieuwe aantal
  document.getElementById("winkelwagenbolletje").innerHTML = productCount;
}
//validatie
// Functie om alle foutmeldingen in het formulier te resetten
function resetForm() {
  document.getElementById("alertfirstName").innerHTML = "";
  document.getElementById("alertlastName").innerHTML = "";
  document.getElementById("alertemail").innerHTML = "";
  document.getElementById("alerthouseNumber").innerHTML = "";
  document.getElementById("alertaddress").innerHTML = "";
  document.getElementById("alertstreet").innerHTML = "";
  document.getElementById("alertphoneNumber").innerHTML = "";
  document.getElementById("alertdob").innerHTML = "";
  document.getElementById("alertpolicy").innerHTML = "";
}

document.addEventListener("DOMContentLoaded", function () {
  let checkoutForm = document.getElementById("checkoutForm");

  // Functie om het formulier te valideren
  if (checkoutForm) {
    checkoutForm.addEventListener("submit", function (event) {
  //prevent defailt action
  event.preventDefault(); // Voorkom dat het formulier wordt verzonden

  resetForm(); // Reset foutmeldingen bij elke validatie

  // Log dat de validatie is gestart
  console.log("validateForm");

  // Validatie voor de voornaam
  let firstName = checkoutForm["firstName"].value;
  if (firstName.trim() === "") {
    document.getElementById("alertfirstName").innerHTML =
      "please fill in your first name.";
    return false;
  }

  // Validatie voor de achternaam
  let lastName = checkoutForm["lastName"].value;
  if (lastName.trim() === "") {
    document.getElementById("alertlastName").innerHTML =
      "please fill in your last name.";
    return false;
  }

  // Validatie voor de straat
  let street = checkoutForm["street"].value;
  if (street.trim() === "") {
    document.getElementById("alertstreet").innerHTML =
      "please fill in your street name.";
    return false;
  }

  // Validatie voor het huisnummer
  let houseNumber = checkoutForm["houseNumber"].value;
  if (houseNumber.trim() === "") {
    document.getElementById("alerthouseNumber").innerHTML =
      "please fill in your house number.";
    return false;
  }

  // Validatie voor het adres
  let address = checkoutForm["address"].value;
  if (address.trim() === "") {
    document.getElementById("alertaddress").innerHTML =
      "please fill in your address.";
    return false;
  }

  // Validatie voor het e-mailadres
  let email = checkoutForm["email"].value;
  if (email.trim() === "") {
    document.getElementById("alertemail").innerHTML =
      "please fill in your email address.";
    return false;
  }

  // Validatie voor het telefoonnummer
  let phoneNumber = checkoutForm["phoneNumber"].value;
  if (phoneNumber.trim() === "") {
    document.getElementById("alertphoneNumber").innerHTML =
      "please fill in your phone number.";
    return false;
  }

  // Validatie voor de geboortedatum
  let dob = checkoutForm["dob"].value;
  if (dob.trim() === "") {
    document.getElementById("alertdob").innerHTML =
      "please fill in your date of birth.";
    return false;
  }

  // Validatie voor de checkbox (algemene voorwaarden)
  let checkboxChecked = document.getElementById("policy").checked;
  if (!checkboxChecked) {
    document.getElementById("alertpolicy").innerHTML =
      "please accept the terms and conditions.";
    return false;
  }

      return true;
    });
  }
});

//
