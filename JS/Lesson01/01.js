console.log("HELLO!");
let hero = "Batman";
console.log("Batman");
let firstName = "Alex";
let lastName = "Turner";
console.log(`${firstName} ${lastName} `);
console.log(location.href);

const greeting = (firstName, lastName) => {
  return "Welcome" + " " + firstName + " " + lastName + "!";
};

console.log(greeting(firstName, lastName));

//const calcArea = (x, y) => {
//  return x * y;
//};

//console.log(calcArea(20, 40));
//let x = window.prompt("give me x");
//let y = window.prompt("give me y");
//console.log(calcArea(parseInt(x), parseInt(y)));

//const validateAge = () => {
//if (window.confirm("are you older than 45?")) {
//return true;
//  } else {
//    window.alert("Not old enough");
//    return false;
//  }
//};

//console.log(validateAge());

const getStringLength = (stringToCount) => {
  return stringToCount.length;
};

console.log(getStringLength("Kris Jenner"));

const reverseName = (firstName, lastName) => {
  let name = firstName + lastName;
  return name.split("").reverse().join("");
};

console.log(reverseName("Kris", "Jenner"));

const celciusToFahrenheit = (celcius) => {
  let fahrenheit = (celcius * 9) / 5 + 32;
  return `${celcius}°C = ${fahrenheit}°F`;
};
console.log(celciusToFahrenheit(0));
