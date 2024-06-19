function displayNumbers() {
    for (let i = 1; i <= 10; i++) {
        console.log(i);
    }
}
displayNumbers();

function displayTable() {
    let table = '<table border="1">';

    for (let i = 1; i <= 10; i++) {
        table += '<tr>'; 
        for (let j = 1; j <= 10; j++) {
            table += `<td>row N :${i}, column N :${j}</td>`; 
        }
        table += '</tr>';
    }

    table += '</table>';

    document.body.innerHTML = table; 
}

displayTable();
