document.addEventListener('DOMContentLoaded', function () {
    const tbody = document.querySelector('tbody')

    function creatorField() {
        const newRow = document.createElement('tr')
        tbody.appendChild(newRow)

        const arrCols = ["Артикул", "Название", "ЕдиницаИзмерения", "Максимум"]
        for (let i = 0; i < arrCols.length; i++) {
            const col = document.createElement('td')
            col.className = 'u-table-cell'
            newRow.appendChild(col)

            const input = document.createElement("input")
            input.placeholder = `Введите ${arrCols[i]}`
            input.name = arrCols[i]
            input.type = i < 3 ? "text" : "number"
            input.min = "0"
            input.step = "1"
            col.appendChild(input)

            i === 3 ? buttonCreateField(col) : null
        }

        function buttonCreateField (parentButton) {
            const createField = document.createElement("button")
            createField.className = 'createField'
            createField.textContent = 'Создать'
            parentButton.appendChild(createField)
        }
    }

    // Function to add edit and delete buttons to a row
    function addButtonsToRow(row) {

        const deleteButton = document.createElement('button')
        deleteButton.className = 'delete-button'
        deleteButton.textContent = 'Удалить'
        deleteButton.id = ""

        row.cells[3].appendChild(deleteButton)
        let article = row.cells[0].textContent

        deleteButton.addEventListener('click', () => send(article));
    }

    // Add edit and delete buttons to each row in the table
    const rows = tbody.querySelectorAll('tr')
    rows.forEach(addButtonsToRow)
    creatorField()
})

function send(article) {


    fetch(`Колбаса.php?article=${article}`, {
        method: 'DELETE',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        }
    })
        .then(response => {
            if (response.ok) {
                console.log(`Item with ID ${article} deleted successfully.`)
                // Handle the successful deletion here
            } else {
                console.error(`Error deleting item with ID ${article}`)
                // Handle errors or non-successful responses here
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle network errors here
        })
}
