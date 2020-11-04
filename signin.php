<?php

//first of all, we need to connect the database
require_once('DBconnection.php');

//we need to check if the input in the form textfields are not empty 
if(isset($_POST['fname']) && isset($_POST['pass'])){
	//write the query to check if this username and password exists in our database
	$u= $_POST ['fname'];
	$p = $_POST['pass'];
	$sql= "SELECT * FROM users WHERE username = '$u' AND password='$p'";
	
	//execute the query
	$result = mysqli_query($conn, $sql);
	
	//check if the it returns an empty set 
	if(mysqli_num_rows($result)!=0){
		
		//echo "You're Welcome";
		header('Location: home.php');
		
	}
	else {
		
		//echo "Username or Password is incorrect";
		header('Location: index.php');
		
	}
}
?>