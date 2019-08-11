const fs = require("fs");
const path = require("path");

const directory_name = {
    sync: "garbage",
    async: "garbage",
};

let src = process.argv[2];
let dst = process.argv[3];


//verifier si le fichier existe

fs.exists(src, function(exists) {
    if (!exists) {
        return console.log("Fatal error !")
    }
    //prendre le contenu le premier fichier
    fs.readFile(src, 'utf8', function(err, data) {  
        if (err) 
        {
            return console.log("Fatal error !")
        }
        //console.log(data);
        //avec le contenu du premier fichier creer un nouveau fichier dans lequel on insert le contenu du premier
        fs.writeFile(dst, data, function(error) {
            if (error) 
            {
                return console.log("Fatal error !")
            }
           
        });
    });
    

});



console.log("Done !\n");