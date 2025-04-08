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
    document.getElementById("alertBijNaam").innerHTML = "";
    document.getElementById("alertAchterNaam").innerHTML = "";
    document.getElementById("alertBijEmail").innerHTML = "";
    document.getElementById("alertBijhuisnmr").innerHTML = "";
    document.getElementById("alertBijToev").innerHTML = "";
    document.getElementById("alertBijPostcode").innerHTML = "";
    document.getElementById("alertBijTelefoon").innerHTML = "";
    document.getElementById("alertBijDatum").innerHTML = "";
    document.getElementById("alertBijCheckbox").innerHTML = "";
}

// Functie om het formulier te valideren
function validateForm() {
    resetForm(); // Reset foutmeldingen bij elke validatie

    // Haal de geselecteerde Preposition op (bijvoorbeeld een radio button)
    let Preposition = document.querySelector('input[name="Preposition"]:checked');
    if (!Preposition) {
        alert("Selecteer een Preposition.");
        return false;
    }
    Preposition = Preposition.value;

    // Voeg de Preposition toe aan de querystring voor de resultpagina
    let form = document.forms["mijnFormulier"];
    form.action = "result.php?Preposition=" + Preposition + "&" + new URLSearchParams(new FormData(form)).toString();

    // Log dat de validatie is gestart
    console.log("validateForm");

    // Validatie voor de voornaam
    let firstName = form["firstName"].value;
    if (firstName.trim() === "") {
        document.getElementById("alertBijNaam").innerHTML = "Naam moet ingevuld worden.";
        return false;
    }

    // Validatie voor de achternaam
    let lastName = form["lastName"].value;
    if (lastName.trim() === "") {
        document.getElementById("alertAchterNaam").innerHTML = "Achternaam moet ingevuld worden.";
        return false;
    }

    // Validatie voor de straat
    let street = form["street"].value;
    if (street.trim() === "") {
        document.getElementById("alertBijToev").innerHTML = "Straat moet ingevuld worden.";
        return false;
    }

    // Validatie voor het huisnummer
    let houseNumber = form["houseNumber"].value;
    if (houseNumber.trim() === "") {
        document.getElementById("alertBijhuisnmr").innerHTML = "Huisnummer moet ingevuld worden.";
        return false;
    }

    // Validatie voor het adres
    let address = form["address"].value;
    if (address.trim() === "") {
        document.getElementById("alertBijPostcode").innerHTML = "Adres moet ingevuld worden.";
        return false;
    }

    // Validatie voor het e-mailadres
    let email = form["email"].value;
    if (email.trim() === "") {
        document.getElementById("alertBijEmail").innerHTML = "E-mailadres moet ingevuld worden.";
        return false;
    }

    // Validatie voor het telefoonnummer
    let phoneNumber = form["phoneNumber"].value;
    if (phoneNumber.trim() === "") {
        document.getElementById("alertBijTelefoon").innerHTML = "Telefoonnummer moet ingevuld worden.";
        return false;
    }

    // Validatie voor de geboortedatum
    let dob = form["dob"].value;
    if (dob.trim() === "") {
        document.getElementById("alertBijDatum").innerHTML = "Geboortedatum moet ingevuld worden.";
        return false;
    }

    // Validatie voor de checkbox (algemene voorwaarden)
    let checkboxChecked = document.getElementById("policy").checked;
    if (!checkboxChecked) {
        document.getElementById("alertBijCheckbox").innerHTML = "Algemene voorwaarden accepteren.";
        return false;
    }

    // Als alles geldig is, retourneer true
    return true;
}
//star rating
const stars = document.querySelectorAll('.star');
const applyButton = document.getElementById('apply-rating');
const ratingMessage = document.getElementById('rating-message');
let selectedRating = 0;
let ratingApplied = false;

stars.forEach(star => {
    star.addEventListener('mouseover', function () {
        if (!ratingApplied) {
            highlightStars(this.getAttribute('data-value'));
        }
    });

    star.addEventListener('mouseout', function () {
        if (!ratingApplied) {
            resetStars();
        }
    });

    star.addEventListener('click', function () {
        if (!ratingApplied) {
            selectedRating = this.getAttribute('data-value');
            highlightStars(selectedRating);
        }
    });
});

function highlightStars(rating) {
    stars.forEach(star => {
        if (star.getAttribute('data-value') <= rating) {
            star.classList.add('selected');
        } else {
            star.classList.remove('selected');
        }
    });
}

function resetStars() {
    stars.forEach(star => {
        star.classList.remove('selected');
    });
}

applyButton.addEventListener('click', function () {
    if (selectedRating > 0 && !ratingApplied) {
        ratingApplied = true;
        ratingMessage.textContent = `You rated this product ${selectedRating} star(s).`;
        applyButton.disabled = true;
        applyButton.style.cursor = 'not-allowed';
        stars.forEach(star => {
            star.style.cursor = 'default';
        });
    } else if (selectedRating === 0) {
        ratingMessage.textContent = 'Please select a rating before applying.';
        ratingMessage.style.color = 'black';
    }
});
