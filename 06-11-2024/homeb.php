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
	//indexed arrays
	$students = array('Jane', 'joy', 'David');
	echo $students[2]. " is a student";
	//associative arrays
	$weight_of_students = array("Joy" => 45.2, "Janet"=>30.0, "John"=> 60.2);
	$janet_weight = $weight_of_students["Janet"];
	echo "<br>She weighs $janet_weight";
	// multidimensional arrays
	$subjects = array(
				array('maths', "English"),
				array('Science', 'Physics')
				);
	echo $subjects[1][0];
	//loops - for loop
	for($j=1; $j<4; $j++){
		echo "<button> Button $j</button>";
	}
	// while loop
	$i = 0;
	while ($i<4){
		echo "<p>This is paragraph $i</p>";
		$i++;
	}
	//foreach 
	//loop through indexed array
	foreach($students as $student){
		echo "<p>$student is taking DBIT</p>";
	}
	//loop through an associative array
	echo "<select>";
	foreach ($weight_of_students as $name => $weight){
		echo "<option>".$name." is ".$weight."kgs</option>";
	}
	echo "</select>";
	// functions
	function hello(){
		echo "hello";
	}
	//call a function
	hello();
	hello();
	//function with parameters
	function findProduct($num1, $num2){
		return $num1 * $num2; //local scope
	}
	$my_product = findProduct(30,23);
	echo "My product is $my_product";
	//if statements
	$example_age = 23; //global scope
	if ($example_age < 18){
		echo "No voting";
	} elseif ($example_age > 18){
		echo "You'll be voting";
	} else {
		echo "Finally voting";
	}
	//constants
	define('PI', 3.14);
	echo PI;


?>
