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
   
   
      // Haal de geselecteerde Preposition op
      let Preposition = document.querySelector('input[name="Preposition"]:checked').value;
   
      // Voeg de Preposition toe aan de querystring voor de resultpagina
      let form = document.forms["mijnFormulier"];
      form.action = "result.php?Preposition=" + Preposition + "&" + new URLSearchParams(new FormData(form)).toString();
   
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
    let street = document.forms["mijnFormulier"]["street"].value;
    if (street == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijToev").innerHTML =
        "Toev. moet ingevuld worden.";
      return false;
      ///---------
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
    let address = document.forms["mijnFormulier"]["address"].value;
    if (address == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijPostcode").innerHTML =
        "address moet ingevuld worden.";
      return false;
      ///---------
    }
   
    ///---------
    let email = document.forms["mijnFormulier"]["email"].value;
    if (email == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijEmail").innerHTML =
        "email moet ingevuld worden.";
      return false;
      ///---------
    }
   
    ///---------
    let phoneNumber = document.forms["mijnFormulier"]["phoneNumber"].value;
    if (phoneNumber == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijTelefoon").innerHTML =
        "phoneNumber moet ingevuld worden.";
      return false;
      ///---------
    }
   
    ///---------
    let dob = document.forms["mijnFormulier"]["dob"].value;
    if (dob == "") {
      //alert("Name must be filled out");
      document.getElementById("alertBijDatum").innerHTML =
        "dob moet ingevuld worden.";
      return false;
      ///---------
    }
    let checkbpxchecked = document.getElementById("policy").checked;
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
   