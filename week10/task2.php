<?php 
$card1="flex";
$card2="flex";
$card3="flex";
if (isset($_GET['forAll'])){
      $maker=array();
	  $cost=array();
	  $year=array(); 
	  $url=array();
	  $Maker="";
	  $link= mysqli_connect("localhost","root","");
	  mysqli_select_db($link,"cars") or die("No connection!");
	  $sql="SELECT Maker,Model,Price,Year,URL from cars";
	  $result = mysqli_query($link, $sql);
	  while ($row = $result->fetch_assoc()) {
    	   array_push($maker,$row['Maker']." ".$row["Model"]);
    	   array_push($cost,$row['Price']);
    	   array_push($year,$row['Year']);
    	   array_push($url,$row['URL']);
}
}
if (isset($_GET['forBMW'])){
    $maker=array();
	$cost=array();
	$year=array(); 
	$url=array();
	$card1="none";
	$card3="none";
	$Maker="";
	$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"cars") or die("No connection!");
	$sql="SELECT Maker,Model,Price,Year,URL from cars WHERE Maker='BMW'";
	$result = mysqli_query($link, $sql);
	while ($row = $result->fetch_assoc()) {
    	array_push($maker,$row['Maker']." ".$row["Model"]);
    	array_push($cost,$row['Price']);
    	array_push($year,$row['Year']);
    	array_push($url,$row['URL']);
	}
}
if (isset($_GET['forToyota'])){
    $maker=array();
	$cost=array();
	$year=array(); 
	$url=array();
	$card2="none";
	$Maker="";
	$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"cars") or die("No connection!");
	$sql="SELECT Maker,Model,Price,Year,URL from cars WHERE Maker='Toyota'";
	$result = mysqli_query($link, $sql);
	while ($row = $result->fetch_assoc()) {
    	array_push($maker,$row['Maker']." ".$row["Model"]);
    	array_push($cost,$row['Price']);
    	array_push($year,$row['Year']);
    	array_push($url,$row['URL']);
	}
}else{
	$maker=array();
	$cost=array();
	$year=array(); 
	$url=array();
	$Maker="";
	$link= mysqli_connect("localhost","root","");
	mysqli_select_db($link,"cars") or die("No connection!");
	$sql="SELECT Maker,Model,Price,Year,URL from cars";
	$result = mysqli_query($link, $sql);
	while ($row = $result->fetch_assoc()) {
    	array_push($maker,$row['Maker']." ".$row["Model"]);
    	array_push($cost,$row['Price']);
    	array_push($year,$row['Year']);
    	array_push($url,$row['URL']);
}
}






?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Task10</title>
	<style>
	.cards{
		display: flex;
		flex-direction: row;
		justify-content: space-between;
	}
	.card1{
		display: <?php echo $card1?>;
		flex-direction: row;
		border:1px solid red;
		border-radius: 5px;
		width: 350px;
		

	}
	.card2{
		display: <?php echo $card2?>;
		flex-direction: row;
		border:1px solid red;
		border-radius: 5px;
		width: 350px;
		

	}
	.card3{
		display: <?php echo $card3?>;
		flex-direction: row;
		border:1px solid red;
		border-radius: 5px;
		width: 350px;
		

	}
	img{
		width: 140px;
		height: 140px;
	}
	h1{
		font-size: 20px;
	}
	</style>		
</head>
<body>
	<div class="cards">
		<div class="card1">
			<img src=<?php echo $url[0] ?> alt="" name="img">
			<div>
			<h1><?php echo $maker[0] ?></h1>
			<p><?php echo $cost[0] ?></p>
			<p><?php echo $year[0] ?></p>
			</div>
		</div>
		<div class="card2">
			<img src=<?php echo $url[1] ?> alt="" name="img">
			<div>
			<h1><?php echo $maker[1] ?></h1>
			<p><?php echo $cost[1] ?></p>
			<p><?php echo $year[1] ?></p>
			</div>
		</div>
		<div class="card3">
			<img src=<?php echo $url[2] ?> alt="" name="img">
			<div>
			<h1><?php echo $maker[2] ?></h1>
			<p><?php echo $cost[2] ?></p>
			<p><?php echo $year[2] ?></p>
			</div>
		</div>
	</div>
	<a href="?forAll">All</a>
	<a href="?forBMW">BMW</a>
	<a href="?forToyota">Toyota</a>
</body>
</html>
 


