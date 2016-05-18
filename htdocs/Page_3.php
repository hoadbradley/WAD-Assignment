 <!DOCTYPE html>

<html>

	<head>
		<title> ReviewYourJourney.com </title>	
		
		<link href="styles.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<header>
		<img src="train.png" alt="train"/>
		www.ReviewYourJourney.com <br>
		<a href="Page_1.html">Home</a>
		<a href="Page_2.html">Signup</a>
		<a href="Page_3.php">Find</a>
		<a href="Page_4.html">About</a>
		<a href="Page_5.php">Login</a>
	</header>	
	<main>	
	<div id="center">
		<form action="review.php" method="POST">

			Email <input type="text" name="Email" required>
			<br>
			<textarea name="Review" cols= "60" rows="10" required>Write a Review</textarea> <input type="submit" value="Submit your review"> 
	</form>



<?php 

			$mysqli = new mysqli("localhost","root","root", "Webapps");
									
											
						if(mysqli_connect_errno()){
							
							echo "I cannot connect";
						}else{
							
							$query = "SELECT * from reviews";
							
							$results = mysqli_query($mysqli, $query);
							
							while($array = mysqli_fetch_array($results)){
								
								echo "<p>".$array['Email']."<br>";
								
								echo "<p>".$array['Review']."<br><br>";
								
								echo "<a href='delete.php?id={$array['ID']}'>Delete</a>";
								
								echo "<a href='edit.php?id={$array['ID']}'>Edit</a>";
								
							}
						}			
			?>

	</div>




</main>


	<br>
	<br>

	<footer>
		<img width="40" height="40" src="phone.png" alt= "phone"/>Contact Us: 01482 123456 <img width="40" height="40" src="mail.png" alt="mail"/>Example@example.com <img width="40" height="40" src="address.png" alt="Address" />East Yorkshire, HU5 5AS
	</footer>	


	</body>
	
	





</html>