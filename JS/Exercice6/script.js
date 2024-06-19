function handleKeyPress(event) {
    let displayArea = document.getElementById('display-area');

    if ((event.key >= '0' && event.key <= '9') || event.key === '.') {
        displayArea.value += event.key;
    } else if (event.key === 'Backspace') {
        displayArea.value = displayArea.value.slice(0, -1);
    }
}

function calculateEUR() {
    let displayArea = document.getElementById('display-area');
    let amountMAD = parseFloat(displayArea.value.replace(',', '.'));
    if (!isNaN(amountMAD)) {
        let amountEUR = amountMAD / 10.18;
        displayArea.value = amountEUR.toFixed(2) + ' EUR';
    }
}


function calculateMAD() {
    let displayArea = document.getElementById('display-area');
    let amountEUR = parseFloat(displayArea.value.replace(',', '.'));
    if (!isNaN(amountEUR)) {
        let amountMAD = amountEUR * 10.18;
        displayArea.value = amountMAD.toFixed(2) + ' MAD';
    }
}
