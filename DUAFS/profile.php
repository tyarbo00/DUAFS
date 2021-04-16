<?php
	include_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/import.css">
<link rel="stylesheet" type="text/css" href="css/default.css">
<link rel="shortcut icon" href="images/lionbw.png" type="image/x-icon">
<script type="text/javascript" src="myjs.js"></script>
<style>
<link rel="stylesheet" type="text/css" href="./css/myslides.css">
</style>

<body>


<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

<div class ="hometop">
	<span>Profile</span>
	<br> </br>
 </div>
<div class ="announcement">
<h2>Account Information  </h2>
<p><em>Below is your account information. If you have any questions or concerns, please visit the campus center or contact the Information department at (479)888-1234.</em> </p>
<p>Your Account Information: </p>
<section class = "signup-form">
	
	<div class = "signup-form-form">
	<form action = "includes/signup.inc.php" method="post">
		<?php
		if(isset($_SESSION["user_id"])){
			echo "<p style ='text-align:left'>Username: ".$_SESSION["username"]. "</p>";
			echo "<p style ='text-align:left'>Name: ".$_SESSION["first_name"]. "  </p>";
			echo "<p style ='text-align:left'>Email: ".$_SESSION["email"]. "</p>";
			
			//Setting Account Type by checking SESSION vars
			$type = "";
			if($_SESSION["is_student"] == 1)
				$type = "Student";
			if($_SESSION["is_professor"] == 1)
				$type = "Professor";
			if($_SESSION["is_advisor"] == 1)
				$type = "Advisor";
			if($_SESSION["is_administrator"] == 1)
				$type = "Administrator";
			if($_SESSION["is_professor"] == 1 && $_SESSION["is_advisor"] == 1 )
				$type = "Professor and Advisor";
			
			
			echo "<p style ='text-align:left'>Account Type(s): $type </p>";
		}
		else{
			header("location: index.php?error=notloggedin");
		}
		?>
	</form>
	</div>
	</div>
	

	
</section>	

  
  <!-- Home Section -->
    
	<div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p></p>
        
      </div>
      <div class="w3-third">
        <p></p>
       
      </div>
      <div class="w3-third">
        <p></p>
        
      </div>
    </div>
  </div>

 

<!-- End Page Content -->

</div>

<!-- Image -->
<img src="./images/tower.jpg" class="w3-image w3-greyscale-min" style="width:100%"> 

<!-- Footer -->

<!--
name=" Tyce Yarborough"
!-->

</body>
</html>
