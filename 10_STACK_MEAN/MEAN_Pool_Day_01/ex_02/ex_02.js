const fs = require("fs");
const path = require("path");
//let files = ('./garbage' + '/');

const directory_name = {
    sync: "garbage",
    async: "garbage",
};

//pour creer le dossier
if (!fs.existsSync("./garbage")){
    fs.mkdirSync("./garbage");
}

//pour effacer les fichiers dans le dossier'
var files = fs.readdirSync('./garbage');
  
    for (const file of files) {
       // console.log("file : " + file);
      fs.unlinkSync(path.join('./garbage', file));
    }

// pour rentrer le nombre d arguments que je veux
let myArgs = process.argv.slice(2);

    myArgs.forEach((val, array) => {
        if (!isNaN(val))
        {
            for(i = 1; i <= val; i++){
                fs.writeFileSync(`${directory_name.sync}/file_${i}.js`);
                console.log("Created file " + i)
            }
        }
    });

console.log("Done !\n");