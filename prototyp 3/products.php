<?php
$products = [
    ["name" => "Produkt 1", "description" => "Popis produktu 1.", "price" => 100],
    ["name" => "Produkt 2", "description" => "Popis produktu 2.", "price" => 200],
];

foreach ($products as $product) {
    echo "<div class='product'>";
    echo "<img src='produkt1.jpg' alt='" . $product['name'] . "'>"; // Upravit dle potřeby
    echo "<h3>" . $product['name'] . "</h3>";
    echo "<p>" . $product['description'] . "</p>";
    echo "<p>Cena: " . $product['price'] . " Kč</p>";
    echo "<button>Koupit</button>";
    echo "</div>";
}
?>
