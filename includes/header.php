<header>
    <!-- Eerste balk met taalkeuze, registratie en login -->
    <div id="balk1">
        <!-- Dropdown menu voor taalkeuze -->
        <div class="language-selector">
            <label for="language">Language: </label>
            <select id="language" onchange="changeLanguage()">
                <option value="Netherlands">Netherlands</option>
                <option value="Belgium">Belgium</option>
                <option value="Germany">Germany</option>
            </select>
        </div>
        
        <!-- Link naar de checkout pagina -->
        <div id="Register">
            <a href="checkout.php">Checkout</a>
        </div>
        
        <!-- Link naar de login pagina -->
        <div id="login">
            <a href="login.php">Login</a>
        </div>

        <!-- Zoekicoon en zoekveld -->
        <img class="zonder-schaduw" id="zoekicoon" src="assets/img/zoek icoon-Photoroom.png" alt="zoek-icoon" />
        <input type="text" name="search" placeholder="Search..">
    </div>

    <!-- Tweede sectie met promotie, logo en winkelnaam -->
    <div>
        <!-- Promotietekst -->
        <p>Free shipping on orders over $750</p>
        
        <!-- Logo van de winkel -->
        <img class="logo" src="assets/img/nieuw logo-Photoroom.png" alt="Shoe store"></img>
        
        <!-- Naam van de winkel -->
        <h1>- D's store -</h1>
    </div>
</header>