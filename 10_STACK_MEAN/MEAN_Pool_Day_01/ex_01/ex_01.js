
let myArgs = process.argv.slice(2);

    myArgs.forEach((val, array) => {
        if (!isNaN(val))
        console.log(val)
    });