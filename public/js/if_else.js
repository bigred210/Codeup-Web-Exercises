// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'blue'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.


// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.
// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.


if (color == "blue") {
    console.log ("The Sky is blue")
} else if ( color == "red") {
    console.log ("Apples are red")
} else if ( color == "orange") {
    console.log ("Oranges are orange")
} else if ( color == "yellow") {
    console.log ("Banannas are yellow")
} else if ( color == "green") {
    console.log ("Grass is green")
} else if ( color == "blue") {
    console.log ("Blue is Awesome")
} else if ( color == "indigo") {
    console.log ("I do not know anything by that color")
} else if ( color == "violet") {
    console.log ("I do not know anything by that color")
}      

// (color == favorite) ? console.log(color + " is my favorite color!") : console.log(color + " is not my favorite color!")

// console.log( color + ((color == favorite) ? " is my favorite color!" : " is not my favorite color!") )

var message = color + ((color == favorite) ? " is my favorite color!" : " is not my favorite color!");
console.log(message);



var car = ['toyota', 'honda', 'ford', 'bmw', 'mercedes', 'chevy', 'lexus'];
var car = car[Math.floor(Math.random()*car.length)];

var favorite = 'lexus';

if (car == "lexus") {
    console.log ("lexus F series is awesome")
} else if (car == "honda") {
    console.log ("honda Type-R")
} else if (car == "ford") {
    console.log ("ford Raptor")
} else if (car == "toyota") {
    console.log ("toyota Prius")
} else if (car == "bmw") {
    console.log ("bmw M")
} else if (car == "chevy") {
    console.log ("chevy Corvette")
} else if (car == "mercedes") {
    console.log ("mercedes AMG")
}



var message = car + ((car == favorite) ? " is my favorite car " : " is stupid ")
console.log (message);











