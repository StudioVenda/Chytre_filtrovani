<?php
echo "<div class='product' data-category='{$product['category']}'>";
echo "<img src='{$product['img']}' alt='{$product['name']}'>";
echo "<div class='product-details'>";
echo "<h3>{$product['name']}</h3>";
echo "<p>{$product['description']}</p>";
echo "</div>";
echo "<div class='product-footer'>";
echo "<button>Uložit do filtrů</button>";
echo "<span class='price'>Cena: {$product['price']} Kč</span>";
echo "</div></div>";
?>
