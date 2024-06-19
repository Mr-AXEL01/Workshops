function guessNumber() {
    const randomNumber = Math.floor(Math.random() * 11);

    const userGuess = parseInt(prompt("Devinez un chiffre entre 0 et 10:"));

    if (isNaN(userGuess)) {
        alert("Veuillez entrer un nombre valide.");
    } else {
        
        if (userGuess === randomNumber) {
            alert("Bravo ! Vous avez trouvé le bon chiffre !");
        } else {
            alert("Désolé, le chiffre était " + randomNumber + ". Essayez encore !");
        }
    }
}

window.onload = guessNumber;
