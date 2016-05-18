<?php
$Email = $_POST['Email'];
$Review = $_POST['Review'];
$Pass = $_POST['Password'];
// Assinging the value of the corresponding boxes to the variables

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection to the server 
$conn = mysqli_connect($servername, $username, $password);

// Check connection with the server details
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
// error message
echo "Connected successfully  ";
// messaged displayed when successfully connected

mysqli_select_db($conn,"Webapps");
// uses the string to search for and browse the database


$sql = "INSERT INTO reviews (Email, Review)
 VALUES ('$Email', '$Review')";
// inserts enterd variable details into database correspondents 
if (mysqli_query($conn, $sql)) {
    echo "   New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// tells the user if this was successfully entered or not
mysqli_close($conn);



echo "<p> Thank you for submitting a review $Email...</p>";
echo "<p> <b> Stay tuned for regular updates and offers to $Email...</b></p>";
?>
// prints the message to the user

<?php 

			$conn = mysqli_connect('localhost', 'root', 'root', 'Webapps');

						
						if(mysqli_connect_errno()){
							
							echo "I cannot connect";
						}else{
							
							$query = "SELECT * from reviews ";
							
							
							
							$results = mysqli_query($mysqli, $query);
							mysqli_select_db($conn,"Webapps");
							while($array = mysqli_fetch_array($results)){
								
								echo "<p>".$array['Email']."<br>";
								
								echo "<p>".$array['Review']."<br><br>";
								
						
								
							}
						}
			
			?>