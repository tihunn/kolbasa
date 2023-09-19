// Function to retrieve data from localStorage
function getDataFromLocalStorage() {
    return JSON.parse(localStorage.getItem('merchandiseData')) || {};
}

// Function to display data on the summary page
function displaySummaryData() {
    const merchandiseData = getDataFromLocalStorage();
    const summaryContainer = document.getElementById('summary-container');
    summaryContainer.innerHTML = '<h2>Summary</h2>';

    for (const article in merchandiseData) {
        const quantity = merchandiseData[article];
        summaryContainer.innerHTML += `<p>Article: ${article}, Quantity: ${quantity}</p>`;
    }
}

// Call the function to display data on page load
window.addEventListener('load', () => {
    displaySummaryData();
});
