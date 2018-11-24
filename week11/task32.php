<?php 
	$idtodelete=$_POST['id'];
	$sql = 'DELETE FROM cars WHERE ID='.$idtodelete.''; 
	$connection = mysqli_connect('localhost','root','') or die("Error!");
	mysqli_select_db($connection,'cars') or die('Eroor');  
	$result = mysqli_query($connection,$sql);
	echo "Deleted succesfully!";

 ?>
 <a href="task31.php">Go back to private Кабинет</a>