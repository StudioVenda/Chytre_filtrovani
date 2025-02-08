<?php include 'header.php'; ?>

<main>
    <section id="categories">
        <?php
        $categories = [
            "Motory" => ["07xx - 20xx", "22xx - 24xx", "28xx a více"],
            "Baterie" => ["1S", "2S", "3S", "4S", "6S", "8S", "Strapy", "Nabíječe"],
            "Vrtule" => ["2\" a tinywhoop", "2,5\"", "3\" - 3,5\"", "4\"", "5\" - 5,2\"", "6\"", "7\" - 8\"", "9\" a větší"],
            "ESC + FC + PBD" => ["16x16", "20x20", "30x30"],
            "RC" => ["Antény", "Ovladače"],
            "Rámy" => ["2,5\"", "3\" - 3,5\"", "4\"", "5\" - 5,2\"", "6\" a více", "Cinewhoop"],
            "FPV" => ["Mini", "Micro", "Nano", "Antény", "Brýle"]
        ];

        foreach ($categories as $category => $subcategories) {
            echo "<div class='dropdown-container' data-category='$category' style='display: none;'>";
            echo "<h2>$category</h2>";
            echo "<div class='subcategories'>";
            foreach ($subcategories as $subcategory) {
                echo "<div class='subcategory-box'><a href='#'>$subcategory</a></div>";
            }
            echo "</div></div>";
        }
        ?>
    </section>
    <section id="products">
        <?php
        $products = [
            ["category" => "07xx - 20xx", "img" => "produkty/motory_07xx_20xx_1.jpg", "name" => "Motory 07xx - 20xx 1", "price" => 100, "description" => "Popis produktu 1."],
            ["category" => "2\" a tinywhoop", "img" => "produkty/vrtule_2in_tinywhoop_1.jpg", "name" => "Vrtule 2\" a tinywhoop 1", "price" => 100, "description" => "Popis produktu 1."],
            ["category" => "Brýle", "img" => "produkty/fpv_bryle_1.jpg", "name" => "FPV Brýle 1", "price" => 100, "description" => "Popis produktu 1."],
            // ... další produkty
        ];

        foreach ($products as $product) {
            include 'product.php';
        }
        ?>
    </section>
</main>

<?php include 'footer.php'; ?>
