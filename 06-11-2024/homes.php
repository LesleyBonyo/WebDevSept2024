<?php 
	// single line comment
	# single line comment
	/* multiple line
	comment */
	echo "<h1 style = 'color:red;'>Hello world</h1>";
	// variables, identifiers and data types
	$first_name = "Jane"; //string
	$age = 13; //int
	$height = 2.5; //float
	$classwork = null; //null
	$marks = [20, 40, 30]; //array
	$unit = true; //bool

	echo var_dump($first_name);
	echo "<br>";
	echo var_dump($age);
	echo "<br>";
	echo var_dump($height);
	echo "<br>";
	echo var_dump($classwork);
	echo "<br>";
	echo var_dump($marks);
	echo "<br>";
	echo var_dump($unit);
	echo "<br>";
	//arrays

	//indexed array
	$students = array('Jane', 'joy', 'David');
	echo $students[2]. " is a student";
	//associative array
	$marks_of_students = array("Jane"=> 14, "Joel"=>20, "Clara"=>30);
	echo $marks_of_students["Joel"];
	//multidimensional arrays
	$units = array( 
				array('Web', 'SE'), //0
				array('Network', 'project')
			);
	echo $units[0][1];
	//looping - for loop
	for($i=0; $i<5; $i++){
		echo "<br><button>button $i</button>";
	}
	// while loop
	$j = 1;
	while ($j<3) {
		echo "<p>A paragraph </p>";
		$j++;
	}
	// foreach
	//looping through an indexed array
	foreach($students as $student){
		echo "$student is a student<br>";
	}
	//looping through associative array
	foreach($marks_of_students as $student=>$mark){
		echo "$student scored $mark <br>";
	}
	// functions
	function addNum(){
		$num1 = 5; //local scope
		$num2 = 15;
		echo $num1 + $num2;
	}
	//call a function
	addNum();
	//function with parameters
	function findProduct($num1, $num2){
		return $num1 * $num2;
	}
	$my_product = findProduct(56,10);
	echo "my product is $my_product";
	//constant variables
	define('PI',3.14);
	//if statements
	$my_age = 15;
	if($my_age < 18){
	echo "<div>you cannot vote</div>";
	} elseif ($my_age > 18) {
		echo "<div>you can vote</div>";
	} else {
		echo "<div>Perfect</div>";
	}
?>
