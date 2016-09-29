<?php

	function signup ($email, $password){
		$database = "if16_romil";
		$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);

		$stmt = $mysqli->prepare("INSERT INTO user_sample 
		(email, password) VALUES (?, ?)");
		
		echo $mysqli->error;
	
		$stmt->bind_param("ss", $email, $password );
		
		if ( $stmt->execute() ) {
			
			echo "salvestamine õnnestus";
			
		} else {
			
			echo "ERROR ".$stmt->error;
		}
		
	
	}

	/*function sum($x, $y){
		$answer = $x+$y;
		return $answer;
	}
	
	$firstname=Aaro;
	$secondname=Videvik;
	function hello($firstname, $secondname){
		
		return "Tere tulemast ".$firstname." ".$secondname;
	}
		echo sum(3214234324432,234234234);
		echo"<br>";
		echo sum(3,2);
		echo"<br>";
		echo hello($firstname,$secondname)*/
?>