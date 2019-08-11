// commande pour demarrer le serveur
//////// tout betement app.js pour l'instant, mais attention il faut le demarrer avec le fichier ex_01 /////////////


//creer une method start qui met en route le serveur
const express = require('express');
const app = express();

// cette application doit afficher du texte sur ma page home
app.get('/',(request, response) => {
    response.send("Greetings Traveler !")
})

//cette methode prend un port d'ecoute en parametre
//ecouter sur ce port
app.listen(4000);

//donc creer une page home ou pas?
//afficher du texte sur cette page