document.addEventListener("DOMContentLoaded", () => {
    const categoryButtons = document.querySelectorAll('.category-button');

    categoryButtons.forEach(button => {
        button.addEventListener('click', () => {
            const dropdownContainers = document.querySelectorAll('.dropdown-container');
            dropdownContainers.forEach(container => container.style.display = 'none');

            const category = button.getAttribute('data-category');
            const container = document.querySelector(`.dropdown-container[data-category="${category}"]`);
            if (container) {
                container.style.display = 'block';
            }
        });
    });
});
