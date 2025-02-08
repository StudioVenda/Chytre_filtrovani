document.addEventListener("DOMContentLoaded", () => {
    const categoryButtons = document.querySelectorAll('.category-button');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const dropdownContainers = document.querySelectorAll('.dropdown-container');
            dropdownContainers.forEach(container => {
                container.style.display = 'none';
                container.classList.remove('active');
            });

            const category = button.getAttribute('data-category');
            const container = document.querySelector(`.dropdown-container[data-category="${category}"]`);
            if (container) {
                container.style.display = 'block';
                setTimeout(() => {
                    container.classList.add('active');
                }, 10);
            }
        });
    });

    const fpvCameras = document.getElementById("fpv-cameras");
    const cameraSubcategories = document.getElementById("camera-subcategories");

    fpvCameras.addEventListener('click', () => {
        cameraSubcategories.style.display = cameraSubcategories.style.display === 'none' ? 'flex' : 'none';
    });

    const products = document.querySelectorAll('.product');
    products.forEach(product => {
        const button = product.querySelector('button');
        button.addEventListener('click', () => {
            alert('Produkt byl uložen do filtrů.');
        });
    });
});
