<!-- Navigatiebalk met flexbox styling -->
<nav style="display:flex; justify-content: space-between;">
    
    <!-- Onzichtbaar blok voor eventuele uitlijning of ruimte -->
    <div id=invisblock></div>
    
    <!-- Navigatielinks naar verschillende categorieën -->
    <div>
        <a href="index.php">Shoes</a> <!-- Link naar de schoenenpagina -->
        <a href="clothing.php">Clothing</a> <!-- Link naar de kledingpagina -->
        <a href="accessoires.php">Accessoires</a> <!-- Link naar de accessoirespagina -->
    </div>
    
    <!-- Winkelwagen sectie -->
    <div>
        <!-- Link naar de winkelwagenpagina met een afbeelding van een winkelwagen -->
        <a href="shoppingcart.php">
            <img class="zonder-schaduw" id="cart" src="assets/img/shopping cart-Photoroom.png" alt="Cart"></img>
        </a>
        
        <!-- Bolletje dat het aantal items in de winkelwagen toont -->
        <div id="winkelwagenbolletje" class="bolletje">1</div>
    </div>
</nav>