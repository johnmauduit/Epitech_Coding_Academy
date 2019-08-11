// commande pour demarrer le serveur
//////// tout betement app.js pour l'instant, mais attention il faut le demarrer avec le fichier ex_01 /////////////

//////////////////// CONSTANTES ET VARIABLES ////////////////////

const express = require('express');
const app = express();


//////////////////// MOTEUR DE TEMPLATES ////////////////////

app.set('view engine', 'ejs')



//////////////////// ROUTES ////////////////////

     // cette application doit afficher du texte sur ma page home
app.get('/',(request, response) => {
    response.send("Greetings Traveler !")
})

//creer des routes qui amene a /index et '/', /image, /form
app.get('/index',(request, response) => {
    response.send("INDEX !")
})

app.get('/form',(request, response) => {
    response.send("FORM !")
})

app.get('/image',(request, response) => {
    response.send("IMAGE !")
})

// ajouter une condition pour que X soit egale n'importe quel nombre
app.get('/student/:id([0-9]+)',(request, response) => {
    let nb = request.params.id;
    response.render('student', {student: `Greetings Student Number ${nb} !`}) 
    //response.send(`Greetings Student Number ${nb} !`)
})

app.get('/student/:id([0-9]+)/:name',(request, response) => {
    let nb = request.params.id;
    let name = request.params.name;
    response.render('student', {student: `Greetings ${name} Student Number ${nb} !`}) 
    //response.send(`Greetings Student Number ${nb} !`)
})


//////////////////// MIDDLEWARE ////////////////////

//creer un condition d'erreur 404 si on se dirige vers une page
app.use(function(req, res, next) {
    res.status(404).send('Error 404: Page not found.');
});


//////////////////// PORT POUR LE SERVEUR ////////////////////

//ecouter sur ce port
app.listen(4000);
