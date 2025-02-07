<?php
$products = [
    ["name" => "Produkt 1", "description" => "Popis produktu 1.", "price" => 100],
    ["name" => "Produkt 2", "description" => "Popis produktu 2.", "price" => 200],
];

foreach ($products as $product) {
    echo "<div class='product'>";
    echo "<h3>" . $product['name'] . "</h3>";
    echo "<p>" . $product['description'] . "</p>";
    echo "<p>Cena: " . $product['price'] . " Kč</p>";
    echo "</div>";
}
?>
