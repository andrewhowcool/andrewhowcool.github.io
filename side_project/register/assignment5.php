<?php
	
	$name = $email = $phone = $birth = $password =  "error";
	$confirm = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  	if ( empty($_POST["name"]) ) {
	  		$name = "Please input user name !!";
	  	}
	  	else{
	  		$name = "SUCCESS !! name : ".($_POST["name"]);
	  	}
	  	

	  	if ( empty($_POST["email"]) ) {
	  		$email = "Please input email !!";
	  	}
	  	elseif ( !preg_match("/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/",($_POST["email"])) ) {
	  		$email = "Email format must have @ and .com !!";
	  	}
	  	else{
	  		$email = "SUCCESS !! email : ".($_POST["email"]);
	  	}



	  	if ( empty($_POST["phone"]) ) {
	  		$phone = "Please input phone number !!";
	  	}
	  	elseif ( !preg_match('/^[0-9-]{10}$/', ($_POST["phone"])) ) {
	  		$phone = "Phone number must be 10 numbers !!";
	  	}
	  	else{
	  		$phone = "SUCCESS !! phone number : ".($_POST["phone"]);
	  	}	  	



	  	if ( empty($_POST["birth"]) ) {
	  		$birth = "Please input birth date !!";
	  	}
	  	elseif ( !preg_match("/^(\d{2}(([02468][048])|([13579][26]))\-((((0[13578])|(1[02]))\-((0[1-9])|([1-2][0-9])|(3[01])))|(((0[469])|(11))\-((0[1-9])|([1-2][0-9])|(30)))|(02\-((0[1-9])|([1-2][0-9])))))|(\d{2}(([02468][1235679])|([13579][01345789]))\-((((0[13578])|(1[02]))\-((0[1-9])|([1-2][0-9])|(3[01])))|(((0[469])|(11))\-((0[1-9])|([1-2][0-9])|(30)))|(02\-((0[1-9])|(1[0-9])|(2[0-8])))))$/", ($_POST["birth"])) ) {
	  		$birth = "Date format must be yyyy-mm-dd !!";
	  	}
	  	else{
	  		$birth = "SUCCESS !! birth date : ".($_POST["birth"]);
	  	}



	  	if ( empty($_POST["password"]) ) {
	  		$password = "Please input password !!";
	  	}
	  	elseif ( preg_match("/^[^A-Z]+$/", ($_POST["password"])) ) {
	  		$password = "Password should include upper case letter !!";
	  	}
	  	elseif ( preg_match("/^[^a-z]+$/", ($_POST["password"])) ) {
	  		$password = "Password should include lower case letter !!";
	  	}
	  	else{
	  		$password = "SUCCESS !! password : ".($_POST["password"]);
	  	}


	  	if ( empty($_POST["confirm"]) ) {
	  		$confirm = "Please confirm password !!";
	  	}
	  	elseif ( ($_POST["confirm"]) != ($_POST["password"]) ) {
	  		$confirm = "Confirm password fail !!";
	  	}
	}



	echo $name."<br>";
	echo $email."<br>";
	echo $phone."<br>";
	echo $birth."<br>";
	echo $password."<br>";
	echo $confirm."<br>";


?>