<?php
$id = $_POST['id'];
$basket = [];
if (isset($_COOKIE["basket"])){
	$basket = json_decode($_COOKIE["basket"]);
}
	array_push($basket,$id);
	setcookie("basket",json_encode($basket));
?>

<form action="task2.php">
	<input type="submit" value="Back">
</form>
<style>
	input{
		border: none;
    	text-decoration: none;
    	color:blue;
    	background-color: white;
	}
</style>
