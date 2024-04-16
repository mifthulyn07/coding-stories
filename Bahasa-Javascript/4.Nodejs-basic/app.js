// mengimpor data dari file lain 
const coffee = require("./module.exports/coffee");
const {firstName, lastName, midName } = require("./module.exports/user");

console.log(coffee);
console.log(firstName + " " + midName + " " + lastName);