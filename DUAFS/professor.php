<?php
	include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/import.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="shortcut icon" href="images/lionbw.png" type="image/x-icon">
<script type="text/javascript" src="myjs.js"></script>
<style>
<link rel="stylesheet" type="text/css" href="./css/myslides.css">
</style>

<body>



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

<?php
		if(isset($_SESSION["user_id"])){
			echo "<p style ='text-align:right'>Hello, ".$_SESSION["first_name"]. "</p>";
		}
	
?>


 <!-- Professor Top -->
 <div class ="hometop">
	<span>Professor Services</span>
 </div>


  

<!-- End Page Content -->

</div>

<img src="./images/tower.jpg" class="w3-image w3-greyscale-min" style="width:100%" > 

<!-- Footer -->

<!--
name=" Tyce Yarborough"
!-->

</body>
</html>
