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
        '2,5"', '3" - 3,5"', '4"', '5"', '6" a větší', "Cinewhoop"
    ],
    "FPV" => [
        "Kamery" => ["Mini", "Micro", "Nano"],
        "Antény", "FPV brýle"
    ]
];

function displayCategories($categories) {
    foreach ($categories as $category => $subcategories) {
        echo "<button class='category-button'>$category</button>";
    }
}

function displayDropdowns($categories) {
    foreach ($categories as $category => $subcategories) {
        echo "<li><a href='#' class='category'>$category</a>";
        if (is_array($subcategories)) {
            echo "<ul class='dropdown'>";
            foreach ($subcategories as $subcategory => $items) {
                if (is_array($items)) {
                    echo "<li><a href='#'>$subcategory</a>";
                    echo "<ul class='dropdown'>";
                    foreach ($items as $item) {
                        echo "<li><a href='#'>$item</a></li>";
                    }
                    echo "</ul></li>";
                } else {
                    echo "<li><a href='#'>$items</a></li>";
                }
            }
            echo "</ul>";
        }
        echo "</li>";
    }
}
?>
