document.addEventListener("DOMContentLoaded", () => {
    const categoryButtons = document.querySelectorAll('.category-button');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const dropdownContainers = document.querySelectorAll('.dropdown-container');
            dropdownContainers.forEach(container => container.style.display = 'none');

            const category = button.textContent.trim();
            const container = Array.from(document.querySelectorAll('.dropdown-container')).find(container => container.querySelector('h2').textContent.trim() === category);
            if (container) {
                container.style.display = 'block';
            }
        });
    });

    const categories = document.querySelectorAll('.category');

    categories.forEach(category => {
        category.addEventListener('click', (event) => {
            event.preventDefault();
            const dropdown = category.nextElementSibling;
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        });
    });
});
