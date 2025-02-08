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
    // Motory 07xx - 20xx
    ["name" => "Motory 07xx - 20xx 1", "category" => "07xx - 20xx", "image" => "produkty/motory_07xx_20xx_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Motory 07xx - 20xx 2", "category" => "07xx - 20xx", "image" => "produkty/motory_07xx_20xx_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Motory 07xx - 20xx 3", "category" => "07xx - 20xx", "image" => "produkty/motory_07xx_20xx_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Motory 07xx - 20xx 4", "category" => "07xx - 20xx", "image" => "produkty/motory_07xx_20xx_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Motory 22xx - 24xx
    ["name" => "Motory 22xx - 24xx 1", "category" => "22xx - 24xx", "image" => "produkty/motory_22xx_24xx_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Motory 22xx - 24xx 2", "category" => "22xx - 24xx", "image" => "produkty/motory_22xx_24xx_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Motory 22xx - 24xx 3", "category" => "22xx - 24xx", "image" => "produkty/motory_22xx_24xx_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Motory 22xx - 24xx 4", "category" => "22xx - 24xx", "image" => "produkty/motory_22xx_24xx_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Motory 28xx a více
    ["name" => "Motory 28xx a více 1", "category" => "28xx a více", "image" => "produkty/motory_28xx_vice_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Motory 28xx a více 2", "category" => "28xx a více", "image" => "produkty/motory_28xx_vice_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Motory 28xx a více 3", "category" => "28xx a více", "image" => "produkty/motory_28xx_vice_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Motory 28xx a více 4", "category" => "28xx a více", "image" => "produkty/motory_28xx_vice_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Baterie 1S
    ["name" => "Baterie 1S 1", "category" => "1S", "image" => "produkty/baterie_1s_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Baterie 1S 2", "category" => "1S", "image" => "produkty/baterie_1s_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Baterie 1S 3", "category" => "1S", "image" => "produkty/baterie_1s_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Baterie 1S 4", "category" => "1S", "image" => "produkty/baterie_1s_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Baterie 2S
    ["name" => "Baterie 2S 1", "category" => "2S", "image" => "produkty/baterie_2s_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Baterie 2S 2", "category" => "2S", "image" => "produkty/baterie_2s_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Baterie 2S 3", "category" => "2S", "image" => "produkty/baterie_2s_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Baterie 2S 4", "category" => "2S", "image" => "produkty/baterie_2s_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Baterie 3S
    ["name" => "Baterie 3S 1", "category" => "3S", "image" => "produkty/baterie_3s_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Baterie 3S 2", "category" => "3S", "image" => "produkty/baterie_3s_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Baterie 3S 3", "category" => "3S", "image" => "produkty/baterie_3s_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Baterie 3S 4", "category" => "3S", "image" => "produkty/baterie_3s_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Baterie 4S
    ["name" => "Baterie 4S 1", "category" => "4S", "image" => "produkty/baterie_4s_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Baterie 4S 2", "category" => "4S", "image" => "produkty/baterie_4s_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Baterie 4S 3", "category" => "4S", "image" => "produkty/baterie_4s_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Baterie 4S 4", "category" => "4S", "image" => "produkty/baterie_4s_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Baterie 6S
    ["name" => "Baterie 6S 1", "category" => "6S", "image" => "produkty/baterie_6s_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Baterie 6S 2", "category" => "6S", "image" => "produkty/baterie_6s_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Baterie 6S 3", "category" => "6S", "image" => "produkty/baterie_6s_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Baterie 6S 4", "category" => "6S", "image" => "produkty/baterie_6s_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Baterie 8S
    ["name" => "Baterie 8S 1", "category" => "8S", "image" => "produkty/baterie_8s_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Baterie 8S 2", "category" => "8S", "image" => "produkty/baterie_8s_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Baterie 8S 3", "category" => "8S", "image" => "produkty/baterie_8s_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Baterie 8S 4", "category" => "8S", "image" => "produkty/baterie_8s_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Baterie Strapy
    ["name" => "Baterie Strapy 1", "category" => "Strapy", "image" => "produkty/baterie_strapy_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Baterie Strapy 2", "category" => "Strapy", "image" => "produkty/baterie_strapy_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Baterie Strapy 3", "category" => "Strapy", "image" => "produkty/baterie_strapy_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Baterie Strapy 4", "category" => "Strapy", "image" => "produkty/baterie_strapy_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Baterie Nabíječe
    ["name" => "Baterie Nabíječe 1", "category" => "Nabíječe", "image" => "produkty/baterie_nabijece_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Baterie Nabíječe 2", "category" => "Nabíječe", "image" => "produkty/baterie_nabijece_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Baterie Nabíječe 3", "category" => "Nabíječe", "image" => "produkty/baterie_nabijece_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Baterie Nabíječe 4", "category" => "Nabíječe", "image" => "produkty/baterie_nabijece_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Vrtule 2" a tinywhoop
    ["name" => "Vrtule 2 a tinywhoop 1", "category" => "2 a tinywhoop", "image" => "produkty/vrtule_2in_tinywhoop_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Vrtule 2 a tinywhoop 2", "category" => "2 a tinywhoop", "image" => "produkty/vrtule_2in_tinywhoop_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Vrtule 2 a tinywhoop 3", "category" => "2 a tinywhoop", "image" => "produkty/vrtule_2in_tinywhoop_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Vrtule 2 a tinywhoop 4", "category" => "2 a tinywhoop", "image" => "produkty/vrtule_2in_tinywhoop_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Vrtule 2,5"
    ["name" => "Vrtule 2,5 1", "category" => "2,5", "image" => "produkty/vrtule_2.5in_1.jpg", "price" => 100, "description" => "Popis produktu 1."],
    ["name" => "Vrtule 2,5 2", "category" => "2,5", "image" => "produkty/vrtule_2.5in_2.jpg", "price" => 200, "description" => "Popis produktu 2."],
    ["name" => "Vrtule 2,5 3", "category" => "2,5", "image" => "produkty/vrtule_2.5in_3.jpg", "price" => 300, "description" => "Popis produktu 3."],
    ["name" => "Vrtule 2,5 4", "category" => "2,5", "image" => "produkty/vrtule_2.5in_4.jpg", "price" => 400, "description" => "Popis produktu 4."],

    // Vrtule 3"