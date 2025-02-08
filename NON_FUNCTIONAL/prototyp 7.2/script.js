document.addEventListener("DOMContentLoaded", () => {
    const categoryButtons = document.querySelectorAll('.category-card');
    const dropdownContainers = document.querySelectorAll('.dropdown-container');
    const products = document.querySelectorAll('.product');
    const searchInput = document.getElementById('search-input');
    const searchButton = document.getElementById('search-button');
    const priceRange = document.getElementById('price-range');
    const priceValue = document.getElementById('price-value');
    const notifications = document.getElementById('notifications');
    const fpvCameras = document.getElementById("fpv-cameras");
    const cameraSubcategories = document.getElementById("camera-subcategories");

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

            // Zobrazení produktů vybrané kategorie
            showCategoryProducts(category);

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

    // Událost kliknutí na FPV kamery pro zobrazení podkategorií
    fpvCameras.addEventListener('click', () => {
        cameraSubcategories.style.display = cameraSubcategories.style.display === 'none' ? 'flex' : 'none';
    });

    // Událost kliknutí na produkty pro ukládání do oblíbených
    products.forEach(product => {
        const button = product.querySelector('button');
        button.addEventListener('click', () => {
            alert('Produkt byl uložen do filtrů.');
            showNotification(`Produkt "${product.querySelector('h3').textContent}" byl uložen do filtrů.`);
        });
    });

    // Vyhledávání produktů
    searchButton.addEventListener('click', () => {
        const searchText = searchInput.value.toLowerCase();
        products.forEach(product => {
            const productName = product.querySelector('h3').textContent.toLowerCase();
            if (productName.includes(searchText)) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });

    // Filtrace produktů podle ceny
    priceRange.addEventListener('input', () => {
        const maxPrice = priceRange.value;
        priceValue.textContent = `${maxPrice} Kč`;
        products.forEach(product => {
            const productPrice = parseInt(product.querySelector('.price').textContent.replace('Cena: ', '').replace(' Kč', ''), 10);
            if (productPrice <= maxPrice) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });

    // Funkce pro zobrazení notifikace
    function showNotification(message) {
        const notification = document.createElement('div');
        notification.className = 'notification';
        notification.textContent = message;
        notifications.appendChild(notification);
        setTimeout(() => {
            notification.remove();
        }, 3000); // Notifikace zmizí po 3 sekundách
    }

    // Ukázka stránkování (jednoduchá implementace)
    const itemsPerPage = 4;
    let currentPage = 1;
    const totalPages = Math.ceil(products.length / itemsPerPage);

    function showPage(page) {
        products.forEach((product, index) => {
            if (index >= (page - 1) * itemsPerPage && index < page * itemsPerPage) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }

    function updatePagination() {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement('button');
            pageButton.textContent = i;
            if (i === currentPage) {
                pageButton.classList.add('active');
            }
            pageButton.addEventListener('click', () => {
                currentPage = i;
                showPage(currentPage);
                updatePagination();
            });
            pagination.appendChild(pageButton);
        }
    }

    showPage(currentPage);
    updatePagination();
});
