<?php
$name=$email=$phonenumber=$country=$gender=$comments="";
$nameReq=$emailReq=$phonenumberReq=$genderReq="";
if ($_SERVER['REQUEST_METHOD']=="POST"){
	if(empty($_POST['name'])){
		$nameReq="Name is required";
	}else{
		$name=test_input($_POST['name']);
	}

	if(empty($_POST['email'])){
		$emailReq="Email is required";
	}else{
		$email=test_input($_POST['email']);
	}

	if(empty($_POST['phonenumber'])){
		$phonenumberReq="Phonenumber is required";
	}else{
		$phonenumber=test_input($_POST['phonenumber']);
	}

	if(empty($_POST['country'])){
		$country="";
	}else{
		$country=test_input($_POST['country']);
	}

	if(empty($_POST['gender'])){
		$genderReq="Gender is required";
	}else{
		$gender=test_input($_POST['gender']);
	}

	if(empty($_POST['comments'])){
		$comments="";
	}else{
		$comments=test_input($_POST['comments']);
	}
}

function test($data){
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data)
	return $data;
}
?>