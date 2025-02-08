<?php
// Data pro kategorie a podkategorie
$categories = [
    "Motory" => [
        "07xx - 20xx",
        "22xx - 24xx",
        "28xx a více"
    ],
    "Baterie" => [
        "1S", "2S", "3S", "4S", "6S", "8S", "Strapy", "Nabíječe"
    ],
    "Vrtule" => [
        '2" a tinywhoop', '2,5"', '3" - 3,5"', '4"', '5" - 5,2"', '6"', '7" - 8"', '9" a větší'
    ],
    "ESC + FC + PBD" => [
        "16x16", "20x20", "30x30"
    ],
    "RC" => [
        "Antény", "Ovladače"
    ],
    "Rámy" => [
        '2,5"', '3" - 3,5"', '4"', '5"', '6" a více', "Cinewhoop"
    ],
    "FPV" => [
        "Kamery" => ["Mini", "Micro", "Nano"],
        "Antény", "FPV brýle"
    ]
];

// Data pro produkty
$products = [
    ["name" => "Produkt 1", "category" => "FPV brýle", "image" => "produkty/produkt1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Produkt 2", "category" => "Motory", "image" => "produkty/produkt2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Produkt 3", "category" => "Vrtule", "image" => "produkty/produkt3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Produkt 4", "category" => "Baterie", "image" => "produkty/produkt4.jpg", "price" => 400, "description" => "Popis produktu 4."],
    ["name" => "Produkt 5", "category" => "ESC + FC + PBD", "image" => "produkty/produkt5.jpg", "price" => 500, "description" => "Popis produktu 5."],
    ["name" => "Produkt 6", "category" => "RC", "image" => "produkty/produkt6.jpg", "price" => 600, "description" => "Popis produktu 6."],
    ["name" => "Produkt 7", "category" => "Rámy", "image" => "produkty/produkt7.jpg", "price" => 700, "description" => "Popis produktu 7."],
    ["name" => "Produkt 8", "category" => "FPV", "image" => "produkty/produkt8.jpg", "price" => 800, "description" => "Popis produktu 8."]
];

// Funkce pro zobrazení kategorií
function displayCategories($categories) {
    foreach ($categories as $category => $subcategories) {
        echo "<div class='category-card' data-category='$category'>
                <img src='obrazky/$category.jpg' alt='$category'>
                <h2>$category</h2>
            </div>";
    }
}

// Funkce pro zobrazení dropdownů
function displayDropdowns($categories) {
    foreach ($categories as $category => $subcategories) {
        echo "<div class='dropdown-container' data-category='$category' style='display: none;'>";
        echo "<h2>$category</h2>";
        echo "<div class='subcategories'>";
        foreach ($subcategories as $subcategory => $items) {
            if (is_array($items)) {
                echo "<div class='subcategory-box'>";
                echo "<a href='#'>$subcategory</a>";
                echo "<div class='subcategory-boxes'>";
                foreach ($items as $item) {
                    echo "<div class='subcategory-box'><a href='#'>$item</a></div>";
                }
                echo "</div></div>";
            } else {
                echo "<div class='subcategory-box'><a href='#'>$items</a></div>";
            }
        }
        echo "</div></div>";
    }
}

// Funkce pro zobrazení produktů
function displayProducts($products) {
    foreach ($products as $product) {
        echo "<div class='product' data-category='{$product['category']}'>
                <img src='{$product['image']}' alt='{$product['name']}'>
                <div class='product-details'>
                    <h3>{$product['name']}</h3>
                    <p>{$product['description']}</p>
                </div>
                <div class='product-footer'>
                    <button>Uložit do filtrů</button>
                    <span class='price'>Cena: {$product['price']} Kč</span>
                </div>
            </div>";
    }
}
?>
