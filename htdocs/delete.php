<?php include('header.php');?>
<h2>Delete Record</h2>
<div class="body">
<?php 

if ($_GET){

// get the id from the URL

$id = $_GET['id'];

$mysqli = new mysqli("localhost", "root", "root", "Webapps");

if (mysqli_connect_errno()){

    echo "I cannot connect";
    }
else{

    // build our delete query, inputting the ID from the URL
    
    $query = "DELETE FROM reviews WHERE ID = {$id}";

    // Run the query with the database details above
    
    $results = mysqli_query($mysqli, $query);
    
    // echo should return "1" if sucessful
    echo $results;
    
    echo '<a href="Page_3.php">Return to Page</a>';


               
    } 
}
?>
</div>
<?php include('footer.php');?>
