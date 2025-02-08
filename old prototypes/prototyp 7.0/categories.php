<?php
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

function displayCategories($categories) {
    foreach ($categories as $category => $subcategories) {
        echo "<button class='category-button' data-category='$category'>$category</button>";
    }
}

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
?>
