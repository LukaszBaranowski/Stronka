<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="source\css\main.css">
</head>

<body>

<script type="module" src="source\js\app.js"></script>

<?php include("source\php\connection.php"); ?>

<main>
    <h1>Witamy na stronie Ukaszowy poradnik!</h1>
    
    <div class="game-selection">
        <p>Proszę wybrać katalog gierki:</p>
    
        <div class="game-menu">
            <div class="menu-item" onclick="toggleMenu(this)">
                > GTA
            </div>
    
            <div class="submenu">
                <a href="#">GTA: San Andreas</a>
                <a href="#">GTA: VC</a>
                <a href="#">GTA: 3</a>
            </div>
        </div>
    
        <div class="game-menu">
            <div class="menu-item" onclick="toggleMenu(this)">
                > Call of Duty
            </div>
    
            <div class="submenu">
                <a href="#">COD: BO1</a>
                <a href="#">COD: MW</a>
                <a href="#">COD: BO2</a>
            </div>
        </div>
    </div>

    
</main>

</body>
</html>