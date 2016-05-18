<?php
$Fname = $_POST['Fname'];
$Email = $_POST['Email'];
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


$sql = "INSERT INTO webapps (Fname, Email, Password)
 VALUES ('$Fname', '$Email', '$Pass')";
// inserts enterd variable details into database correspondents 
if (mysqli_query($conn, $sql)) {
    echo "   New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
// tells the user if this was successfully entered or not
mysqli_close($conn);


echo "<p> Thank you for signing up $Fname...</p>";
echo "<p> <b> Stay tuned for regular updates and offers to $Email...</b></p>";
?>
// prints the message to the user