console.log("imported formChecker");

// var keyArray = ['username', 'password', 'banana', 'dinosaur', 'puzzle'];

reset = (key) => {
    console.log(`Resetting ${key}`);
    var field = document.getElementById(key);
    field.value = "";
}

resetAll = (keyArray) => {
    console.log(`Resetting ${keyArray}`);
    keyArray.forEach(element => {
        reset(element);
    });
};

validateOrder = (itemArray) => {
    console.log("Validating quantities...");
    itemArray.forEach(item => {
        let field = document.getElementById(item);
        let value = field.value;
        try {
            value = parseFloat(value);
            if(Number.isInteger(value)) {
                if (value >= 0) {
                    console.log(`Valid input: ${value}`);
                } else {
                    console.log(`Input ${value} is not nonnegative...`);
                }
            } else {
                console.log(`Input ${value} is not an integer or not a number...`);
            }
        } catch(err) {
            console.log(err);
        }
    })
}

