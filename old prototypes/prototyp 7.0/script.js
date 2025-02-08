document.addEventListener("DOMContentLoaded", () => {
    const categoryButtons = document.querySelectorAll('.category-button');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const dropdownContainers = document.querySelectorAll('.dropdown-container');
            dropdownContainers.forEach(container => {
                container.style.display = 'none';
                container.classList.remove('active'); // Odebrání třídy pro přechod
            });

            const category = button.getAttribute('data-category');
            const container = document.querySelector(`.dropdown-container[data-category="${category}"]`);
            if (container) {
                container.style.display = 'block';
                setTimeout(() => {
                    container.classList.add('active'); // Přidání třídy pro přechod
                }, 10); // Krátké zpoždění pro aplikaci přechodu
            }
        });
    });

    // Kód pro správné zobrazení produktů
    const products = document.querySelectorAll('.product');
    products.forEach(product => {
        const button = product.querySelector('button');
        button.addEventListener('click', () => {
            alert('Produkt byl uložen do filtrů.');
        });
    });
});
