// Function to save data to localStorage
function saveDataToLocalStorage(article, quantity) {
    const merchandiseData = JSON.parse(localStorage.getItem('merchandiseData')) || {};
    merchandiseData[article] = quantity;
    localStorage.setItem('merchandiseData', JSON.stringify(merchandiseData));
}

// Add event listeners to input fields
document.addEventListener('DOMContentLoaded', () => {
    const quantityInputs = document.querySelectorAll('input[type="number"]');
    quantityInputs.forEach(input => {
        input.addEventListener('input', (event) => {
            const article = event.target.getAttribute('name');
            const quantity = parseInt(event.target.value);
            saveDataToLocalStorage(article, quantity);
        });

    });
});