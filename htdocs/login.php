<?php
	if($_POST){
	$username = $_POST['Email'];
	$password = $_POST['Password'];
	$mysqli = new mysqli("localhost", "root", "root", "Webapps");
	if(mysqli_connect_errno()){
		echo "Error connecting to database";
	}
	else{

		$query = "SELECT * FROM webapps WHERE Email = '{$username}'";


	$results = mysqli_query($mysqli, $query);

	$numberOfRows = mysqli_num_rows($results);

	if($numberOfRows > 0){
	
		while($array = mysqli_fetch_array($results)){

		$dbPassword = $array['Password'];

		if($dbPassword == $password){

			session_start();

			$_SESSION['username'] = $username;

			header('Location: Page_1.html');
		}
	}
}
}}?>