//bolletje
let productCount = 0;

if (localStorage.getItem("productCount")) {
  productCount = localStorage.getItem("productCount");
} else {
  productCount = 0;
  localStorage.setItem("productCount", 0);
}

document.getElementById("winkelwagenbolletje").innerHTML = productCount;

function winkelWagenAdd() {
  productCount = Number(productCount) + 1;
  localStorage.setItem("productCount", productCount);
  console.log("winkelWagenAdd", productCount);
  document.getElementById("winkelwagenbolletje").innerHTML = productCount;
}
//validatie
function resetForm() {
    document.getElementById("alertBijNaam").innerHTML = "";
    document.getElementById("alertAchterNaam").innerHTML = "";
    document.getElementById("alertBijEmail").innerHTML = "";
    document.getElementById("alertBijhuisnmr").innerHTML = "";
    document.getElementById("alertBijToev").innerHTML = "";
    document.getElementById("alertBijPostcode").innerHTML = "";
    document.getElementById("alertBijTelefoon").innerHTML = "";
    document.getElementById("alertBijDatum").innerHTML = "";
  }
   
  function validateForm() {
   
   
      // Haal de geselecteerde aanhef op
      let aanhef = document.querySelector('input[name="aanhef"]:checked').value;
   
      // Voeg de aanhef toe aan de querystring voor de resultpagina
      let form = document.forms["mijnFormulier"];
      form.action = "resultaat.php?aanhef=" + aanhef + "&" + new URLSearchParams(new FormData(form)).toString();
   
  //    return true;  // Verzendt het formulier
  //  }
   
    console.log("validateForm");
    ///---------
    let firstName = document.forms["mijnFormulier"]["firstName"].value;
    if (firstName == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijNaam").innerHTML =
        "Naam moet ingevuld worden.";
      return false;
    }
   
    ///---------
    let lastName = document.forms["mijnFormulier"]["lastName"].value;
    if (lastName == "") {
      //alert("Name must be filled out");
      document.getElementById("alertAchterNaam").innerHTML =
        "lastName moet ingevuld worden.";
      return false;
    }
   
    ///---------
    let houseNumber = document.forms["mijnFormulier"]["houseNumber"].value;
    if (houseNumber == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijhuisnmr").innerHTML =
        "houseNumber moet ingevuld worden.";
      return false;
    }
   
    ///---------
    let straatnaam = document.forms["mijnFormulier"]["straatnaam"].value;
    if (straatnaam == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijToev").innerHTML =
        "Toev. moet ingevuld worden.";
      return false;
      ///---------
    }
   
    ///---------
    let postcode = document.forms["mijnFormulier"]["postcode"].value;
    if (postcode == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijPostcode").innerHTML =
        "Postcode moet ingevuld worden.";
      return false;
      ///---------
    }
   
    ///---------
    let email = document.forms["mijnFormulier"]["email"].value;
    if (email == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijEmail").innerHTML =
        "Email moet ingevuld worden.";
      return false;
      ///---------
    }
   
    ///---------
    let telefoonnummer = document.forms["mijnFormulier"]["telefoonnummer"].value;
    if (telefoonnummer == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijTelefoon").innerHTML =
        "Telefoonnummer moet ingevuld worden.";
      return false;
      ///---------
    }
   
    ///---------
    let datum = document.forms["mijnFormulier"]["datum"].value;
    if (datum == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijDatum").innerHTML =
        "Datum moet ingevuld worden.";
      return false;
      ///---------
    }
    let checkbpxchecked = document.getElementById("checkbox1").checked;
    if (checkbpxchecked == false) {
      //alert("Name must be filled out");
      document.getElementById("alertBijCheckbox").innerHTML =
        "Algemene voorwaarden accepteren.";
      return false;
      ///---------
    }
   
  }
  //bovenste code zorgt ervoor dat er een melding in beeld komt te staan dat je dit vak verplicht in moet vullen.
  //js voor formulier
   