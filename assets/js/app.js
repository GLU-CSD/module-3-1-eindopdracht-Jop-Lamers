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

// Functie om alle foutmeldingen in het formulier te resetten
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

// Functie om het formulier te valideren
function validateForm() {
    // Haal de geselecteerde Preposition op (bijvoorbeeld een radio button)
    let Preposition = document.querySelector('input[name="Preposition"]:checked').value;

    // Voeg de Preposition toe aan de querystring voor de resultpagina
    let form = document.forms["mijnFormulier"];
    form.action = "result.php?Preposition=" + Preposition + "&" + new URLSearchParams(new FormData(form)).toString();

    // Log dat de validatie is gestart
    console.log("validateForm");

    // Validatie voor de voornaam
    let firstName = document.forms["mijnFormulier"]["firstName"].value;
    if (firstName == "") {
        document.getElementById("alertBijNaam").innerHTML = "Naam moet ingevuld worden.";
        return false;
    }

    // Validatie voor de achternaam
    let lastName = document.forms["mijnFormulier"]["lastName"].value;
    if (lastName == "") {
        document.getElementById("alertAchterNaam").innerHTML = "Achternaam moet ingevuld worden.";
        return false;
    }

    // Validatie voor de straat
    let street = document.forms["mijnFormulier"]["street"].value;
    if (street == "") {
        document.getElementById("alertBijToev").innerHTML = "Straat moet ingevuld worden.";
        return false;
    }

    // Validatie voor het huisnummer
    let houseNumber = document.forms["mijnFormulier"]["houseNumber"].value;
    if (houseNumber == "") {
        document.getElementById("alertBijhuisnmr").innerHTML = "Huisnummer moet ingevuld worden.";
        return false;
    }

    // Validatie voor het adres
    let address = document.forms["mijnFormulier"]["address"].value;
    if (address == "") {
        document.getElementById("alertBijPostcode").innerHTML = "Adres moet ingevuld worden.";
        return false;
    }

    // Validatie voor het e-mailadres
    let email = document.forms["mijnFormulier"]["email"].value;
    if (email == "") {
        document.getElementById("alertBijEmail").innerHTML = "E-mailadres moet ingevuld worden.";
        return false;
    }

    // Validatie voor het telefoonnummer
    let phoneNumber = document.forms["mijnFormulier"]["phoneNumber"].value;
    if (phoneNumber == "") {
        document.getElementById("alertBijTelefoon").innerHTML = "Telefoonnummer moet ingevuld worden.";
        return false;
    }

    // Validatie voor de geboortedatum
    let dob = document.forms["mijnFormulier"]["dob"].value;
    if (dob == "") {
        document.getElementById("alertBijDatum").innerHTML = "Geboortedatum moet ingevuld worden.";
        return false;
    }

    // Validatie voor de checkbox (algemene voorwaarden)
    let checkbpxchecked = document.getElementById("policy").checked;
    if (checkbpxchecked == false) {
        document.getElementById("alertBijCheckbox").innerHTML = "Algemene voorwaarden accepteren.";
        return false;
    }
}
