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


 <!-- Student Top -->
 <div class ="hometop">
	<span>Student Services</span>
 </div>


<div class ="randomname">
<TABLE>
   <TR>
      <TD>Data 1</TD>
      <TD>Data 2</TD>
   </TR>
   <TR>
      <TD>Data 3</TD>
      <TD>Data 4</TD>
   </TR>
   <TR>
      <TD>Data 5</TD>
      <TD>Data 6</TD>
   </TR>
</TABLE>
</div>

<!-- End Page Content -->

</div>

<img src="./images/tower.jpg" class="w3-image w3-greyscale-min" style="width:100%" > 

<!-- Footer -->



</body>
</html>
