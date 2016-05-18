<?php include('header.php');?>

<body>
<header>
<div class="Body">
<h2>Edit page</h2>
</div>
</header>

<div class="thirty left">

<?php if($_POST){
	
$mysqli = new mysqli("localhost","root","root", "Webapps");

if(mysqli_connect_errno()){
	
	echo "I cannot connect";
	
	
}else{
	
	$query = "UPDATE reviews SET Email = '{$_POST['Email']}', Review = '{$_POST['Review']}'";
	
	$results = mysqli_query($mysqli, $query);
	
	if($results == 1)
	{echo "Review Updated!";}
else{ echo "failed";}
	
}

}


?>

<?php

$mysqli = new mysqli("localhost","root","root");

if(mysqli_connect_errno()){
	
	echo "I cannot connect";
	
	
}else{
	
	$query = "SELECT * FROM reviews WHERE id ={$_GET['id']}";
	
	$results = mysqli_query($mysqli, $query);
	
	while($array = mysqli_fetch_array($results)){
		
		$id = $array['id'];
		$title = $array['Email'];
		$contents = $array['Review'];
		
	}
	
}


?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
				
				<input type="text" name="Email" placeholder="Email" value="<?php echo $title;?>" required>
				<br><br>				
				<textarea rows="10" name="Review" placeholder="Review"  required> <?php echo $contents;?> </textarea>
				<br><br>
				<input type="submit" value="Post Review">
				
				</form>

</div>

<?php include('footer.php');?>