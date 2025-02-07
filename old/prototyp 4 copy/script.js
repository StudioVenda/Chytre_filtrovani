document.addEventListener("DOMContentLoaded", () => {
    const categories = document.querySelectorAll('.category');

    categories.forEach(category => {
        category.addEventListener('click', (event) => {
            event.preventDefault();
            const dropdown = category.nextElementSibling;
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });
    });
});
