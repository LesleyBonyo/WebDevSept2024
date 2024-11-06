// JS code on an external js file

//single-line comment
/* multiple line 
comment */

console.log("External js file");

//variables, datatypes and identifiers
//declare variables
let firstName = "John"; //string
let age = 20;//number
let height = 5.5;//number
let myRegister = true;//boolean
let lastName;//undefined
let school = null;//null
// check their data type
console.log(typeof firstName);
//arrays
let namesOfStudents = ["Jane", "Joel", "Joy"];
//loop through array
for(let j=0; j<namesOfStudents.length; j++){
	console.log(namesOfStudents[j] + " is a student.");
}
console.log(namesOfStudents[1]);
//objects
let student = {
	//properties
	firstName: "Sarah",
	age: 12,
	course: "DBIT",
	//methods
	studentDetails: function(){
		//console.log("Student details");
		console.log(this.firstName + " is taking " +
			this.course + ".She is " + this.age 
			+ "years old.");
	}
}
//access object properties
console.log(student.age);
console.log(student.firstName);
//access object methods
student.studentDetails();

//let, var and const
var studentName = "clara";
var studentName = "Jim"; // no error

let studentAge = 18;
//let studentAge = 16 gives an error
const myCourse = "DBIT";

studentAge = 20;
//functions
function myFunction(){
	console.log("This is a function");
}
// calling the function
myFunction();
myFunction();
// function with parameters
function myDetails(myName, age){
	console.log(myName + " is " + age +" years old.");
}
myDetails("Jane", 18);
// function that returns a value
function myProduct(num1,num2){
	let result = num1 * num2; //local scope
	return result;
}
//console.log(result); // gives an error when accessed outside the function

let exampleProduct = myProduct(5,20);
console.log(exampleProduct);

{
	let example = 12; // block scope
	console.log(example);
}
//console.log(example); gives an error when accessed outide the block of code

// if else 
const passMark = 50;
let studentMark = 45;
if (studentMark>passMark){
	console.log("Passed");
} else if (studentMark == passMark) {
	console.log("Average");
} else {
	console.log("failed");
}

//for loop
for(let i = 1; i < 8; i++){
	console.log("line " + i);
}
//DOM
//Access html elements -by id
let myPar = document.getElementById("myPar");
console.log(myPar);
// by tag name
const paragraphs = document.getElementsByTagName('p'); //array
console.log(paragraphs[1]);
//by class name
const myClass = document.getElementsByClassName("myClass"); //array
console.log(myClass[1]);

//properties
//innerHTML - get or change inner content of an element
let mydiv = document.getElementById("mydiv");
mydiv.innerHTML += myPar.innerHTML;
mydiv.innerHTML = "This has been added";
// html attributes
//src
let myImg = document.getElementById('myimg');
myImg.src = "https://www.bing.com/th?id=OIP.FRWgbtVdQix0pAPY28iWkwHaFB&w=154&h=104&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2";
//href
let myLink = document.getElementById('mylink');
myLink.href = "https://x.com/";
myLink.title = "Added this title";
// css styling
myImg.style.border = "2px dotted red";
//myImg.style.display = "none";

myLink.style.fontSize = "40px";
//value - gets the value of an input element
function getProduct(){
	const username = document.getElementById('username').value;
	const number1 = document.getElementById('number1').value;
	const number2 = document.getElementById('number2').value;

	let product = number1 * number2;
	let result = username + " your product is " + product;
	//console.log(result);
	document.getElementById('myresult').innerHTML = result;
	document.getElementById('myresult').style.color = 'red';
	return false;
}
//events - eg clicking a button, submitting a form
function userSubmit(){
	//let firstname = document.getElementById('firstname').value;
	let emptyDiv = document.getElementById('emptydiv');
	emptyDiv.innerHTML += "You has clicked the submit button" + "<br>";
	//return false;
}
//event listeners
document.getElementById('submit').addEventListener('click', userSubmit);
