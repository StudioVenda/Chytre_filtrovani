<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-shop</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>E-shop</h1>
        <nav>
            <ul id="menu">
                <li><a href="#">Domů</a></li>
                <li><a href="#">O nás</a></li>
                <li><a href="#">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="categories">
            <?php
            include 'categories.php';
            displayCategories($categories);
            ?>
        </section>
        <section id="dropdowns">
            <?php
            displayDropdowns($categories);
            ?>
        </section>
        <section id="products">
            <h2>Naše produkty</h2>
            <div class="product">
                <img src="produkt1.jpg" alt="Produkt 1">
                <h3>Produkt 1</h3>
                <p>Popis produktu 1.</p>
                <p>Cena: 100 Kč</p>
                <button>Koupit</button>
            </div>
            <div class="product">
                <img src="produkt2.jpg" alt="Produkt 2">
                <h3>Produkt 2</h3>
                <p>Popis produktu 2.</p>
                <p>Cena: 200 Kč</p>
                <button>Koupit</button>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 E-shop. Všechna práva vyhrazena.</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
