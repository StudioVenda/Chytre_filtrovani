document.addEventListener("DOMContentLoaded", () => {
    const categoryButtons = document.querySelectorAll('.category-card');
    const dropdownContainers = document.querySelectorAll('.dropdown-container');
    const subcategoryBoxes = document.querySelectorAll('.subcategory-box');
    const products = document.querySelectorAll('.product');

    // Funkce pro zobrazení pouze vybrané kategorie produktů
    function showCategoryProducts(category) {
        products.forEach(product => {
            if (product.getAttribute('data-category') === category || category === "Všechny produkty") {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }

    // Událost kliknutí na kategorie
    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const category = button.getAttribute('data-category');

            // Skrytí všech dropdownů
            dropdownContainers.forEach(container => {
                container.style.display = 'none';
                container.classList.remove('active'); // Odebrání třídy pro přechod
            });

            // Zobrazení správného dropdownu
            const container = document.querySelector(`.dropdown-container[data-category="${category}"]`);
            if (container) {
                container.style.display = 'block';
                setTimeout(() => {
                    container.classList.add('active'); // Přidání třídy pro přechod
                }, 10); // Krátké zpoždění pro aplikaci přechodu
            }
        });
    });

    // Událost kliknutí na subkategorie
    subcategoryBoxes.forEach(box => {
        box.addEventListener('click', () => {
            const subcategory = box.innerText;

            // Zobrazení produktů vybrané podkategorie
            showCategoryProducts(subcategory);
        });
    });

    // Událost kliknutí na FPV kamery pro zobrazení podkategorií
    const fpvCameras = document.getElementById("fpv-cameras");
    const cameraSubcategories = document.getElementById("camera-subcategories");

    fpvCameras.addEventListener('click', () => {
        cameraSubcategories.style.display = cameraSubcategories.style.display === 'none' ? 'flex' : 'none';
    });

    // Událost kliknutí na produkty
    products.forEach(product => {
        const button = product.querySelector('button');
        button.addEventListener('click', () => {
            alert('Produkt byl uložen do filtrů.');
        });
    });
});
