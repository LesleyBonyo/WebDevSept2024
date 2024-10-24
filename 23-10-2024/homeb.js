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
